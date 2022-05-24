<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!isset($_SESSION['login_status'])) {
            return redirect()->to('/Login');
        }

        return view('home.php');
    }
}
