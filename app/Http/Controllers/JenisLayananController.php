<?php

namespace App\Http\Controllers;

use App\Models\jenis_layanan;
use App\Models\barang;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $AWAL = 'ID';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\jenis_layanan::max('id');
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

        $jenis_layanan = \App\Models\jenis_layanan::all();

        return view('jenisLayanan',['jenis_layanan' => $jenis_layanan,'noUrutAkhir' => $noUrutAkhir]);

    }

    public function tambah(Request $request)
    {
        \App\Models\jenis_layanan::create($request->all());
        return redirect('/jenisLayanan')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $jenis_layanan = \App\Models\jenis_layanan::find($id);
        return view('layanan.edit',['jenis_layanan' => $jenis_layanan]);

    }

    public function update(Request $request,$id)
    {
        $jenis_layanan = \App\Models\jenis_layanan::find($id);
        $jenis_layanan->update($request->all());
        return redirect('/jenisLayanan')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $jenis_layanan = \App\Models\jenis_layanan::find($id);
        $jenis_layanan->delete();
        return redirect('/jenisLayanan')->with('sukses','Data berhasil di hapus !');
    }

}
