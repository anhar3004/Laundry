<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_admin');
            $table->string('email');
            $table->string('nama');
            $table->bigInteger('no_hp');
            $table->string('password');
            $table->timestamps();

            $table->engine ='InnoDB';
        });

        if (Schema::hasColumn('users', 'password')) {
            // The "users" table exists and has an "email" column...
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
