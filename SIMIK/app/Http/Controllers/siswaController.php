<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index ()
    {
        $siswa = \App\Models\siswa::paginate(5);

        return view('Admin.Siswa.dataSiswa',['siswa' => $siswa]);
    }

    public function tambahSiswa ()
    {
        $kelas = \App\Models\kelas::all();
        return view('Admin.Siswa.tambahSiswa',['kelas' => $kelas]);
    }

    public function tambah(Request $request)
    {

        \App\Models\siswa::create([

            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_diterima' => $request->tanggal_diterima,
            'dikelas' => $request->dikelas,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'no_hp_wali' => $request->no_hp_wali,

        ]);

        return redirect('/siswa')->with('sukses','Data berhasil di tambahkan !');
    }

    public function ubahSiswa ($id)
    {
        $siswa = \App\Models\siswa::find($id);
        $kelas = \App\Models\kelas::all();
        return view('Admin.Siswa.ubahSiswa',['siswa'=> $siswa,'kelas'=> $kelas]);


    }

    public function detail ($id)
    {
        $siswa = \App\Models\siswa::where('id_siswa',$id)->get();
        return redirect ('/siswa')->with('detail','null')->with(['siswa'=> $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Models\siswa::find($id);
        $siswa->update([

            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_diterima' => $request->tanggal_diterima,
            'dikelas' => $request->dikelas,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'no_hp_wali' => $request->no_hp_wali,

            ]);

        return redirect('/siswa')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $siswa = \App\Models\siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses','Data berhasil di hapus !');
    }
}

