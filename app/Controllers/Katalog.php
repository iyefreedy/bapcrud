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
}