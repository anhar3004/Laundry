<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $AWAL = 'CST';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\customer::max('id');
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
        $customer = \App\Models\customer::all();
        return view('customer',['customer'=> $customer,'noUrutAkhir'=> $noUrutAkhir]);

    }
    public function tambah(Request $request)
    {
        \App\Models\customer::create($request->all());
        return redirect('/customer')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $customer = \App\Models\customer::find($id);
        return view('customer.edit',['customer'=> $customer]);
    }

    public function update(Request $request,$id)
    {
        $customer = \App\Models\customer::find($id);
        $customer->update($request->all());
        return redirect('/customer')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $customer = \App\Models\customer::find($id);
        $customer->delete();
        return redirect('/customer')->with('sukses','Data berhasil di hapus !');
    }
}
