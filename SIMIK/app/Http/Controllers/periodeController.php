<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodeController extends Controller
{
    public function index ()
    {
        $periode = \App\Models\periode::paginate(5);
        return view('Admin.Periode.dataPeriode',['periode' => $periode]);
    }

    public function tambah(Request $request)
    {

        \App\Models\periode::create([

            'periode_awal' => $request->periode_awal,
            'periode_akhir' => $request->periode_akhir,


        ]);

        return redirect('/periode')->with('sukses','Data berhasil di tambahkan !');
    }

    public function update(Request $request,$id)
    {
        $periode = \App\Models\periode::where('id',$id);
        $periode->update([

            'periode_awal' =>  $request->periode_awal,
            'periode_akhir' =>  $request->periode_akhir,

            ]);

        return redirect('/periode')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $periode = \App\Models\periode::find($id);
        $periode->delete();
        return redirect('/periode')->with('sukses','Data berhasil di hapus !');
    }
}
