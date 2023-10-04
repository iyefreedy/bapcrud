<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model
{
    protected $table = 'equipment';
    protected $useTimestamp = true;

    public function getEquipment($slug=false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    protected $allowedFields = ['nama_alat', 'slug', 'brand', 'capacity', 'sampul', 'pdf'];

    public function search($keyword)
    {
        // $builder = $this->table('equipment');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('equipment')->like('nama_alat', $keyword);
    }
}