<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusPesanan extends Model
{
    use HasFactory;

    protected $table = 'status_pesanan';
    protected $fillable = ['id','kode_status_pesanan','status_pesanan',];

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }

}
