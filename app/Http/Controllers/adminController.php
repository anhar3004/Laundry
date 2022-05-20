<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class adminController extends Controller
{
    public function index()
    {
        $AWAL = 'ADM';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\User::max('id');
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
        $data_admin = \App\Models\User::all();
        return view('admin',['data_admin' => $data_admin,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function tambah(Request $request)
    {
        // \App\Models\User::create($request->all());
        \App\Models\User::create([
            'kode_admin' =>  $request->kode_admin,
            'email' =>  $request->email,
            'nama' =>  $request->nama,
            'no_hp' =>  $request->no_hp,
            'password' =>  Hash::make($request->password) ,
        ]);
        return redirect('/admin')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $admin = \App\Models\User::find($id);
        return view('admin.edit',['admin'=> $admin]);
    }

    public function update(Request $request,$id)
    {
        $admin = \App\Models\User::find($id);
        $admin->update([
            'email' =>  $request->email,
            'nama' =>  $request->nama,
            'no_hp' =>  $request->no_hp,
            'password' =>  Hash::make($request->password),
        ]);
        return redirect('/admin')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $admin = \App\Models\User::find($id);
        $admin->delete();
        return redirect('/admin')->with('sukses','Data berhasil di hapus !');
    }
}
