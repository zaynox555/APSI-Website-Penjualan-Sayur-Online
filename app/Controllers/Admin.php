<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $this->admin_session_check();
        return view('admin-home');
    }

    public function produk()
    {
        $this->admin_session_check();
        return view('admin-produk');
    }

    private function admin_session_check()
    {
        if (!session()->has('admin_login')) return redirect()->to('/Login');
    }
}
