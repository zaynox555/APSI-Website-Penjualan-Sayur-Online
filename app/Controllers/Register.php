<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        if (isset($_POST['register'])) {
            $this->register();
        }
        return view('register.php');
    }

    private function register()
    {
    }
}
