<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DetailController extends Controller
{
    public function show()
    {
        // Logika dan pemrosesan data untuk halaman detail

        // Contoh tampilan halaman detail
        return view('motor1');
    }
    public function showMotor2()
    {
        // Logika dan pemrosesan data untuk halaman detail motor 2

        return view('motor2');
    }

    public function showMotor3()
    {
        // Logika dan pemrosesan data untuk halaman detail motor 3

        return view('motor3');
    }

    public function showMotor4()
    {
        // Logika dan pemrosesan data untuk halaman detail motor 4

        return view('motor4');
    }

}
