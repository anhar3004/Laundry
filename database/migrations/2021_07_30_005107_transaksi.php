<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_transaksi');
            $table->foreignId('customer');
            $table->foreignId('paket');
            $table->integer('berat');
            $table->integer('total');
            $table->foreignId('status_pesanan');
            $table->foreignId('status_pembayaran');
            $table->foreignId('admin');
            $table->timestamps();

            $table->foreign('customer')->references('id')->on('customers');
            $table->foreign('paket')->references('id')->on('paket');
            $table->foreign('status_pesanan')->references('id')->on('status_pesanan');
            $table->foreign('status_pembayaran')->references('id')->on('status_pembayaran');
            $table->foreign('admin')->references('id')->on('admins');
            $table->engine ='InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
