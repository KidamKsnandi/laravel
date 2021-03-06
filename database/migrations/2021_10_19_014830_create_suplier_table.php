<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuplierTable extends Migration
{
    public function up()
    {
        Schema::create('suplier', function (Blueprint $table) {
            $table->increments('id_suplier');
            $table->string('nama');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->string('kota');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suplier');
    }
}
