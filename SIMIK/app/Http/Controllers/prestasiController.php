<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prestasiController extends Controller
{
    public function index ()
    {
        return view('Admin.Prestasi.dataPrestasi');
    }
}
