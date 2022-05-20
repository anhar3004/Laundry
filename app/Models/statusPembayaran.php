<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusPembayaran extends Model
{
    use HasFactory;
    protected $table = 'status_pembayaran';
    protected $fillable = ['id','kode_status_pembayaran','status_pembayaran',];

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }

}
