<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function index ()
    {
        $kelas = \App\Models\kelas::all();
        return view('Admin.Jadwal.dataJadwal',['kelas'=>$kelas]);
    }
}
