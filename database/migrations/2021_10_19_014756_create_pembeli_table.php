<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama');
            $table->string('jns_kelamin');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->string('kota');
            $table->date('tgl_lahir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembeli');
    }
}
