<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $table = 'customers';
    protected $fillable = ['id','kode_customer','email','nama','no_hp','alamat'];

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }
}
