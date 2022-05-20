<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index ()
    {
        $guru = \App\Models\guru::paginate(5);
        return view('Admin.Guru.dataGuru',['guru' => $guru]);
    }

    public function tambahGuru ()
    {
        return view('Admin.Guru.tambahGuru');
    }

    public function tambah(Request $request)
    {

        \App\Models\guru::create([

            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,

        ]);

        return redirect('/guru')->with('sukses','Data berhasil di tambahkan !');
    }

    public function ubahGuru ($id)
    {
        $guru = \App\Models\guru::find($id);
        return view('Admin.Guru.ubahGuru',['guru'=> $guru]);


    }
    public function update(Request $request,$id)
    {
        $guru = \App\Models\guru::find($id);
        $guru->update([

            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            ]);

        return redirect('/guru')->with('sukses','Data berhasil di ubah !');
    }

    public function delete($id)
    {
        $guru = \App\Models\guru::find($id);
        $guru->delete();
        return redirect('/guru')->with('sukses','Data berhasil di hapus !');
    }

    public function detail ($id)
    {
        $guru = \App\Models\guru::where('id_guru',$id)->get();
        return redirect ('/guru')->with('detail','null')->with(['guru'=> $guru]);
    }
}
