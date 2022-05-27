<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('login_status')) return redirect()->to('/Login');
        return view('home.php');
    }
}
