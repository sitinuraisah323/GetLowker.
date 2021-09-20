<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_calons', function (Blueprint $table) {
            $table->increments('id_calon');
             $table->string('nama_calon');
              $table->string('alamat');
               $table->string('umur');
                $table->string('jk');
                 $table->string('motivasi');
           
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
        Schema::dropIfExists('tb_calons');
    }
}
