<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index ()
    {
        $kelas = \App\Models\kelas::all();
        $ruangan = \App\Models\ruangan::where('ruangan','Ruang Kelas')->get();
        $guru = \App\Models\guru::all();
        return view('Admin.Kelas.dataKelas',['kelas' => $kelas,'ruangan' => $ruangan,'guru' => $guru]);
    }

    public function tambah(Request $request)
    {

        \App\Models\kelas::create([

            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'walkes' => $request->walkes,

        ]);

        return redirect('/kelas')->with('sukses','Data berhasil di tambahkan !');
    }

    public function update(Request $request,$id)
    {
        $kelas = \App\Models\kelas::where('id_kelas',$id);
        $kelas->update([

            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'walkes' => $request->walkes,
            ]);

        return redirect('/kelas')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $kelas = \App\Models\kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('sukses','Data berhasil di hapus !');
    }

    public function daftar ($id)
    {
        $siswa = \App\Models\siswa::where('kelas',$id)->get();

        return redirect ('/kelas')->with('daftar','null')->with(['siswa'=> $siswa]);
    }
}
