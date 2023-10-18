<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $useTimestamp = true;

    public function getNews($id=false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = ['sampul', 'judul', 'description'];
}