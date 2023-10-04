<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customerModel;
    public function __construct()
    {

        $this->customerModel = new CustomerModel();

    }

    public function index()
    {
        
        $customer = $this->customerModel->findAll();

        $data = [
            'title' => 'Daftar Customer',
            'customer' => $customer
        ];

        //cara connect db tanpa model
        // $db = \Config\Database::connect();
        // $equipment = $db->query("SELECT * FROM equipment");
        // dd($equipment);


        // Chek Model Connection 

        return view('admin/customer', $data);
    }
}