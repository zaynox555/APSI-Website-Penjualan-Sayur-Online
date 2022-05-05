<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        // nanti diganti jadi query ke database
        if (!empty($_COOKIE['account_created'])) {
            return redirect()->to('/Account');
        } else {
            return view('register.php');
        }
    }
}
