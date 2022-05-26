<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $this->client_session_check();
        return view('cart.php');
    }
}
