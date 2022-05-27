<?php

namespace App\Controllers;

class Delivery extends BaseController
{
    public function index()
    {
        if (!session()->has('login_status')) return redirect()->to('/Login');
        return view('delivery.php');
    }
}
