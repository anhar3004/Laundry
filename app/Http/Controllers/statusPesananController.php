<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusPesananController extends Controller
{
    public function index()
    {
        $AWAL = 'STPSN';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\statusPesanan::max('id');
        $no = 1;
        // $noUrutAkhir = sprintf("%03s", ($id + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        if($noUrutAkhir ) {
            $id= $AWAL.sprintf("%03s", abs($noUrutAkhir + 1));
            $noUrutAkhir = $id;
        }
        else {
            // $id =  $AWAL .sprintf("%03s", abs($noUrutAkhir + 1));
            // $noUrutAkhir = $id;
            $id=  $AWAL.sprintf("%03s", $no);
            $noUrutAkhir = $id;
        }
        $status_pesanan = \App\Models\statusPesanan::all();
        return view('statusPesanan',['status_pesanan' => $status_pesanan,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function tambah(Request $request)
    {
        \App\Models\statusPesanan::create($request->all());
        return redirect('/statusPesanan')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $status_pesanan = \App\Models\statusPesanan::find($id);
        return view('statusPesanan.edit',['status_pesanan'=> $status_pesanan,]);
    }

    public function update(Request $request,$id)
    {
        $status_pesanan = \App\Models\statusPesanan::find($id);
        $status_pesanan->update($request->all());
        return redirect('/statusPesanan')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $status_pesanan = \App\Models\statusPesanan::find($id);
        $status_pesanan->delete();
        return redirect('/statusPesanan')->with('sukses','Data berhasil di hapus !');
    }
}
