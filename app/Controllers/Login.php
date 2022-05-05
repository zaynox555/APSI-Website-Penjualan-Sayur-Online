<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if ($_COOKIE['logged_in'] == 'true') {
            return redirect()->to('/');
        } else {
            return view('login.php');
        }
    }
}
