<?php

namespace App\Controllers;

class Admin extends BaseController
{

    
    public function index()
    {
        return view('admin/dashboard');
    }

    public function customer()
    {
        return view('admin/customer');
    }

    public function form()
    {
        return view('admin/form');  
    }
}
