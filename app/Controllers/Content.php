<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Content extends BaseController
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    public function index()
    {
        $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar News',
            'news' => $news
        ];

        // Chek Model Connection
        // $newsModel = new NewsModel();
        // $news = $newsModel->findAll();
        // dd($news); 

        return view('Pages/news', $data);
    }

    public function detail($id)
    {
        
        $data = [

            'title' => 'Latest Update',
            'news' => $this->newsModel->getNews($id)
        ];

        // Jika equipment tidak ada pada table
        if(empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('content ' . $id . ' tidak ditemukan');
        }

        // dd($data);

        return view('/news_detail', $data);
    }
}