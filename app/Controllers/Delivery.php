<?php

namespace App\Controllers;

class Delivery extends BaseController
{
    public function index()
    {
        $this->client_session_check();
        return view('delivery.php');
    }
}
