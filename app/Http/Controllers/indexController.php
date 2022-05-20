<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
   public function index()
   {
      return view ('index');
   }


   public function cekPesanan(Request $request)
   {
       $data_transaksi = \App\Models\transaksi::all();
       $data_pesanan = $request->keyword;

       $pesanan = $data_transaksi->where('kode_transaksi',$data_pesanan);


       return view('cekPesanan',['pesanan'=>$pesanan]);
   }
}
