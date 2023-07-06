<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Homepage extends Controller
{
    public function index()
    {
        return view('homepage');
    }
}
