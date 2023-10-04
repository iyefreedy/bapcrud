<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $useTimestamp = true;

    protected $allowedFields = ['sampul', 'judul', 'description'];
}