<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';

    protected $allowedFields = ['email', 'nohp', 'password', 'nama', 'alamat'];

    public function getUser($email)
    {
        return $this->where('email', $email)->first();
    }

    public function getUserById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function saveUser($data)
    {
        return $this->save($data);
    }

    public function updateUser($whereId, $data)
    {
        return $this->update($whereId, $data);
    }
}
