<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mengajarController extends Controller
{
    public function index ()
    {
        $mengajar = \App\Models\mengajar::paginate(5);
        $guru = \App\Models\guru::all();
        $pelajaran = \App\Models\pelajaran::all();
        $kelas = \App\Models\kelas::all();
        return view('Admin.Mengajar.dataMengajar',['mengajar'=>$mengajar,'guru'=>$guru,'kelas'=>$kelas,'pelajaran'=>$pelajaran]);
    }

    public function tambah(Request $request)
    {

        \App\Models\mengajar::create([

            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
            'guru' => $request->guru,

        ]);

        return redirect('/mengajar')->with('sukses','Data berhasil di tambahkan !');
    }

    public function update(Request $request,$id)
    {
        $mengajar = \App\Models\mengajar::where('id_mengajar',$id);
        $mengajar->update([

            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
            'guru' => $request->guru,
            ]);

        return redirect('/mengajar')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $mengajar = \App\Models\mengajar::find($id);
        $mengajar->delete();
        return redirect('/mengajar')->with('sukses','Data berhasil di hapus !');
    }
}
