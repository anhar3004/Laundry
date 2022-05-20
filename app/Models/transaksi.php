<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['id','kode_transaksi','customer','paket','berat','total','status_pesanan','status_pembayaran','admin','tanggal_awal','tanggal_akhir','created_at'];

    public function customers(){

        return $this->belongsTo(customer::class,'customer','id');
    }
    public function pakets(){

        return $this->belongsTo(paket::class,'paket','id');
    }

    public function statusPesanans(){

        return $this->belongsTo(statusPesanan::class,'status_pesanan','id');
    }

    public function statusPembayarans(){

        return $this->belongsTo(statusPembayaran::class,'status_pembayaran','id');
    }

    public function Users(){

        return $this->belongsTo(User::class,'admin','id');
    }

    public function jenisLayanans(){

        return $this->belongsTo(User::class,'jenis_layanan','id');
    }




}
