<?php

namespace App\Models;

use CodeIgniter\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $allowedFields = ['tanggal', 'kode_pesanan', 'id_produk', 'kuantitas', 'total'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function saveOrder($data)
    {
        return $this->save($data);
    }
}
