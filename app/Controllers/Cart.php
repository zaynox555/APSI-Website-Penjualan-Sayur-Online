<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        return view('cart.php');
    }
}
