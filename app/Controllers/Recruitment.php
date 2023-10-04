<?php

namespace App\Controllers;

// use App\Models\RecruitmentModel;

class Recruitment extends BaseController
{
    // protected $recruitmentModel;
    // public function __construct()
    // {
    //     $this->recruitmentModel = new RecruitmentModel();
    // }

    public function index()
     {
        // $recruitment = $this->recruitmentModel->findAll();

        // $data = [
        //     'title' => 'Daftar recruitment',
        //     'recruitment' => $this->recruitmentModel->getRecruitment()
        // ];

        // cara connect db tanpa model
        // $db = \Config\Database::connect();
        // $equipment = $db->query("SELECT * FROM equipment");
        // dd($equipment);


        // Chek Model Connection
        // $equipmentModel = new EquipmentModel();
        // $equipment = $equipmentModel->findAll();
        // dd($equipment); 

        return view('Pages/form_career');
    }
}