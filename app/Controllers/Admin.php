<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if (!session()->has('admin_login')) return redirect()->to('/Login');
        return view('admin-home');
    }
}
