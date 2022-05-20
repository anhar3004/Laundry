<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusPembayaranController extends Controller
{
    public function index()
    {
        $AWAL = 'STPBY';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\statusPembayaran::max('id');
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
        $status_pembayaran = \App\Models\statusPembayaran::all();
        return view('statusPembayaran',['status_pembayaran' => $status_pembayaran,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function tambah(Request $request)
    {
        \App\Models\statusPembayaran::create($request->all());
        return redirect('/statusPembayaran')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $status_pembayaran = \App\Models\statusPembayaran::find($id);
        return view('statusPembayaran.edit',['status_pembayaran'=> $status_pembayaran,]);
    }

    public function update(Request $request,$id)
    {
        $status_pembayaran = \App\Models\statusPembayaran::find($id);
        $status_pembayaran->update($request->all());
        return redirect('/statusPembayaran')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $status_pembayaran = \App\Models\statusPembayaran::find($id);
        $status_pembayaran->delete();
        return redirect('/statusPembayaran')->with('sukses','Data berhasil di hapus !');
    }
}
