<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function processForm()
    {
        return view('processForm');
    }

    public function success()
    {
        return view('success');
    }
}
