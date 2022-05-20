<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ruanganController extends Controller
{
    public function index ()
    {
        $ruangan = \App\Models\ruangan::paginate(5);
        return view('Admin.Ruangan.dataRuangan',['ruangan' => $ruangan]);
    }

    public function tambah(Request $request)
    {

        \App\Models\ruangan::create([

            'kd_ruangan' => $request->kd_ruangan,
            'ruangan' => $request->ruangan,

        ]);

        return redirect('/ruangan')->with('sukses','Data berhasil di tambahkan !');
    }

    public function update(Request $request,$id)
    {
        $ruangan = \App\Models\ruangan::find($id);
        $ruangan->update([

            'kd_ruangan' => $request->kd_ruangan,
            'ruangan' => $request->ruangan,

            ]);

        return redirect('/ruangan')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $ruangan = \App\Models\ruangan::find($id);
        $ruangan->delete();
        return redirect('/ruangan')->with('sukses','Data berhasil di hapus !');
    }
}
