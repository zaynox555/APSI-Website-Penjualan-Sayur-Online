<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $allowedFields = ['nama', 'foto', 'harga', 'jenis', 'stok'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function saveProduk($data)
    {
        return $this->save($data);
    }
}
