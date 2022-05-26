<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->client_session_check();
        return view('home.php');
    }
}
