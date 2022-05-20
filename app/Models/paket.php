<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jenis_layanan;

class paket extends Model
{
    use HasFactory;

    protected $table = 'paket';
    protected $fillable = ['kode_paket','jenis_layanan','paket','berat','tarif'];

    public function jenis_layanans(){

        return $this->belongsTo(jenis_layanan::class,'jenis_layanan','id');
    }

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }

}
