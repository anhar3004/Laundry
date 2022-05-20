<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_paket');
            $table->foreignId('jenis_layanan');
            $table->string('deskripsi');
            $table->integer('berat');
            $table->integer('tarif');
            $table->timestamps();

            $table->foreign('jenis_layanan')->references('id')->on('jenis_layanan');
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
        Schema::dropIfExists('paket');
    }
}
