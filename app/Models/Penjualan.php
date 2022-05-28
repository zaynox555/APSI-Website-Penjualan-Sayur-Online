<?php

namespace App\Models;

use CodeIgniter\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $allowedFields = [];

    public function getAll()
    {
        return $this->findAll();
    }

    public function saveOrder($data)
    {
        return $this->save($data);
    }
}
