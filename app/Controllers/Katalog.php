<?php

namespace App\Controllers;

use App\Models\EquipmentModel;

class Katalog extends BaseController
{
    protected $equipmentModel;
    public function __construct()
    {
        $this->equipmentModel = new EquipmentModel();
    }

    public function index()
    {
        $equipment = $this->equipmentModel->findAll();

        $data = [
            'title' => 'Daftar Equipment',
            'equipment' => $this->equipmentModel->getEquipment()
        ];

        //cara connect db tanpa model
        // $db = \Config\Database::connect();
        // $equipment = $db->query("SELECT * FROM equipment");
        // dd($equipment);


        // Chek Model Connection
        // $equipmentModel = new EquipmentModel();
        // $equipment = $equipmentModel->findAll();
        // dd($equipment); 

        return view('/katalog', $data);
    }

    public function detail($slug)
    {
        
        $data = [

            'title' => 'Detail Equipment',
            'equipment' => $this->equipmentModel->getEquipment($slug)
        ];

        // Jika equipment tidak ada pada table
        if(empty($data['equipment'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama alat ' . $slug . ' tidak ditemukan');
        }

        return view('katalog_detail', $data);
    }
}