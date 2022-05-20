<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $data_transaksi = \App\Models\transaksi::all();
        $total = \App\Models\transaksi::sum('total');
        $jumlah_transaksi = \App\Models\transaksi::count();
        $jumlah_customer = \App\Models\customer::count();
        $jumlah_paket = \App\Models\paket::count();

        return view('home',['data_transaksi'=>$data_transaksi,'total'=>$total,'jumlah_transaksi'=>$jumlah_transaksi,'jumlah_customer'=>$jumlah_customer,'jumlah_paket'=>$jumlah_paket]);
    }
}
