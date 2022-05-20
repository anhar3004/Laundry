<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelajaranController extends Controller
{
    public function index ()
    {

        $AWAL = 'MPL';
        $noUrutAkhir = \App\Models\pelajaran::max('id_mapel');
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
        $pelajaran = \App\Models\pelajaran::paginate(5);
        return view('Admin.Pelajaran.dataPelajaran',['pelajaran' => $pelajaran,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function tambah(Request $request)
    {

        \App\Models\pelajaran::create([

            'kd_mapel' => $request->kd_mapel,
            'nama_mapel' => $request->nama_mapel,
            'muatan' => $request->muatan,
            'kkm' => $request->kkm,


        ]);

        return redirect('/pelajaran')->with('sukses','Data berhasil di tambahkan !');
    }

    public function update(Request $request,$id)
    {
        $pelajaran = \App\Models\pelajaran::where('id_mapel',$id);
        $pelajaran->update([

            'kd_mapel' => $request->kd_mapel,
            'nama_mapel' => $request->nama_mapel,
            'muatan' => $request->muatan,
            'kkm' => $request->kkm,
            ]);

        return redirect('/pelajaran')->with('sukses','Data berhasil di ubah !');

    }

    public function delete($id)
    {
        $pelajaran = \App\Models\pelajaran::find($id);
        $pelajaran->delete();
        return redirect('/pelajaran')->with('sukses','Data berhasil di hapus !');
    }
}
