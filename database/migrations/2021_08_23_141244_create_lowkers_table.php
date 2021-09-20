<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowkers', function (Blueprint $table) {
            $table->increments('id_lowker');
            $table->string('posisi');
            $table->string('level');
            $table->string('tipe');
            $table->string('gaji');
            $table->string('pendidikan');
            $table->string('lokasi');
            $table->string('kualifikasi');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowkers');
    }
}
