<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket;

class paketController extends Controller
{
    public function paket()
    {
        $AWAL = 'PKT';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\paket::max('id');
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

        $data_paket = \App\Models\paket::all();
        $jenis_layanan = \App\Models\jenis_layanan::all();
        return view('paket',['data_paket' => $data_paket,'jenis_layanan' => $jenis_layanan,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function tambah(Request $request)
    {
        \App\Models\paket::create($request->all());
        return redirect('/paket')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $paket = \App\Models\paket::find($id);
        $jenis_layanan = \App\Models\jenis_layanan::all();
        return view('paket.edit',['paket'=> $paket,'jenis_layanan' => $jenis_layanan]);
    }

    public function update(Request $request,$id)
    {
        $paket = \App\Models\paket::find($id);
        $paket->update($request->all());
        return redirect('/paket')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $paket = \App\Models\paket::find($id);
        $paket->delete();
        return redirect('/paket')->with('sukses','Data berhasil di hapus !');
    }
}
