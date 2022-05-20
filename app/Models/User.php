<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = ['id','kode_admin','email','nama','no_hp','password'];

    public function transaksis(){

        return $this->hasMany(transaksi::class);
    }

}
