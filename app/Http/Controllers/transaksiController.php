<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\paket;
use App\Models\statusPesanan;
use App\Models\statusPembayaran;
use App\Models\transaksi;
use PDF;

use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index(Request $request )
    {
        $AWAL = 'TRX';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\transaksi::max('id');
        $no = 1;
        // $noUrutAkhir = sprintf("%03s", ($id + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        if($noUrutAkhir ) {
            $id= sprintf("%03s", abs($noUrutAkhir + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            $noUrutAkhir = $id;
        }
        else {
            // $id =  $AWAL .sprintf("%03s", abs($noUrutAkhir + 1));
            // $noUrutAkhir = $id;
            $id=  sprintf("%03s", $no). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            $noUrutAkhir = $id;
        }
        $customer = \App\Models\customer::all();
        $paket = \App\Models\paket::all();
        $status_pesanan = \App\Models\statusPesanan::all();
        $status_pembayaran = \App\Models\statusPembayaran::all();
        $user = \App\Models\User::all();
        $data_transaksi = \App\Models\transaksi::all();

        return view('transaksi',['customer' => $customer,'paket' => $paket,'status_pesanan' => $status_pesanan,'status_pembayaran' => $status_pembayaran,'user' => $user,'data_transaksi' => $data_transaksi,'noUrutAkhir' => $noUrutAkhir]);
        // $status_pesanan = \App\Models\statusPesanan::all();
        // return view('transaksi',['status_pesanan' => $status_pesanan]);
    }

    public function up_status($id)
    {
        $transaksi = \App\Models\transaksi::find($id);
        $status = $transaksi->status_pesanan;
        $id_pesanan = $transaksi->statusPesanans->id;

        $status_baru = $id_pesanan + 1;
        $transaksi->update([

            'status_pesanan' =>  $status_baru
        ]);

        return redirect('/transaksi');
    }

    public function down_status($id)
    {
        $transaksi = \App\Models\transaksi::find($id);
        $status = $transaksi->status_pesanan;
        $id_pesanan = $transaksi->statusPesanans->id;

        $status_baru = $id_pesanan - 1;
        $transaksi->update([

            'status_pesanan' =>  $status_baru
        ]);

        return redirect('/transaksi');
    }


    public function tambah(Request $request)
    {
        $harga = \App\Models\paket::find($request->paket);
        $harga_paket = $harga->tarif;
        $berat = $request->berat;

        $total = $harga_paket * $berat;

        \App\Models\transaksi::create([

            'kode_transaksi' =>  $request->kode_transaksi,
            'customer' =>  $request->customer,
            'paket' =>  $request->paket,
            'berat' =>  $request->berat,
            'total' =>  $total,
            'status_pesanan' =>  $request->status_pesanan,
            'status_pembayaran' =>  $request->status_pembayaran,
            'admin' =>  $request->admin

        ]);


        return redirect('/transaksi')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $customer = \App\Models\customer::all();
        $paket = \App\Models\paket::all();
        $status_pesanan = \App\Models\statusPesanan::all();
        $status_pembayaran = \App\Models\statusPembayaran::all();
        $user = \App\Models\User::all();
        $transaksi = \App\Models\transaksi::find($id);

        return view('transaksi.edit',['transaksi'=> $transaksi,'customer'=> $customer,'paket'=> $paket,'status_pesanan'=> $status_pesanan,'status_pembayaran'=> $status_pembayaran,'user'=> $user,]);
    }

    public function update(Request $request,$id)
    {
        $harga = \App\Models\paket::find($request->paket);
        $harga_paket = $harga->tarif;
        $berat = $request->berat;

        $total = $harga_paket * $berat;

        $transaksi = \App\Models\transaksi::find($id);
        $transaksi->update([

        'kode_transaksi' =>  $request->kode_transaksi,
        'customer' =>  $request->customer,
        'paket' =>  $request->paket,
        'berat' =>  $request->berat,
        'total' =>  $total,
        'status_pesanan' =>  $request->status_pesanan,
        'status_pembayaran' =>  $request->status_pembayaran,
        'admin' =>  $request->admin
        ]);
        return redirect('/transaksi')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $transaksi = \App\Models\transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi')->with('sukses','Data berhasil di hapus !');
    }

    public function filterTanggal(Request $request)
    {

        $customer = \App\Models\customer::all();
        $paket = \App\Models\paket::all();
        $status_pesanan = \App\Models\statusPesanan::all();
        $status_pembayaran = \App\Models\statusPembayaran::all();
        $user = \App\Models\transaksi::all();


        $AWAL = 'TRX';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\transaksi::max('id');
        $no = 1;
        // $noUrutAkhir = sprintf("%03s", ($id + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        if($noUrutAkhir ) {
            $id= sprintf("%03s", abs($noUrutAkhir + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            $noUrutAkhir = $id;
        }
        else {
            // $id =  $AWAL .sprintf("%03s", abs($noUrutAkhir + 1));
            // $noUrutAkhir = $id;
            $id=  sprintf("%03s", $no). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            $noUrutAkhir = $id;
        }
        $transaksi = \App\Models\transaksi::all();
        $tanggal_awal = date('Y-d-m',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-d-m',strtotime($request->tanggal_akhir));

        // $data_transaksi = $transaksi->whereBetween('created_at',[$tanggal_awal,$tanggal_akhir]);
        $data_transaksi = $transaksi->where('created_at','>=',$tanggal_awal)->where('created_at','<=',$tanggal_akhir);

        return view('transaksi',['customer' => $customer,'paket' => $paket,'status_pesanan' => $status_pesanan,'status_pembayaran' => $status_pembayaran,'user' => $user,'data_transaksi' => $data_transaksi,'noUrutAkhir' => $noUrutAkhir]);
    }

    public function print($id)
    {

        $transaksi = \App\Models\transaksi::find($id);


        $pdf = PDF::loadView('pdf.printTransaksi',['transaksi' =>$transaksi])->setPaper('a4', 'landscape');

        return $pdf->download('transaksi.pdf');
        // return view ('transaksi.pdf',['transaksi' => $transaksi]);
    }

    public function cetakLaporan(Request $request)
    {
        $data_transaksi = \App\Models\transaksi::all();
        $tanggal_awal = date('Y-d-m',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-d-m',strtotime($request->tanggal_akhir));

        // $transaksi = $data_transaksi->whereBetween('created_at',[$tanggal_awal,$tanggal_akhir]);
        $transaksi = $data_transaksi->where('created_at','>=',$tanggal_awal)->where('created_at','<=',$tanggal_akhir);

        $total = $transaksi->sum('total');
        $pdf = PDF::loadView('pdf.cetakLaporan',['transaksi' =>$transaksi,'total' =>$total])->setPaper('a4', 'landscape');


        return $pdf->download('laporan.pdf');
    }

    public function cetakLaporanSemua()
    {
        $transaksi = \App\Models\transaksi::all();

        $total = $transaksi->sum('total');


        $pdf = PDF::loadView('pdf.cetakLaporan',['transaksi' =>$transaksi,'total' =>$total,])->setPaper('a4', 'landscape');


        return $pdf->download('laporan.pdf');
    }
}
