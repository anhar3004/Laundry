<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_layanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_layanan';
    protected $fillable = ['id','kode_layanan','jenis_layanan'];

    public function pakets(){

        return $this->hasMany(paket::class);
    }

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }

}
