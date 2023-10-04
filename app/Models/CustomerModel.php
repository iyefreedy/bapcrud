<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $useTimestamp = true;

    protected $allowedFields = ['name', 'email', 'subject', 'message'];
}