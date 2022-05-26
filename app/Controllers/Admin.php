<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->session_check();
        return view('admin-home');
    }

    public function produk()
    {
        $this->session_check();
        return view('admin-produk');
    }

    private function session_check()
    {
        if (!session()->has('admin_login')) return redirect()->to('/Login');
    }
}
