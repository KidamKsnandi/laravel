<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $tabel) {
            $tabel->increments('id');
            $tabel->string('name');
            $tabel->date('bornDate');
            $tabel->string('gender');
            $tabel->text('address');
            $tabel->string('religion');
            $tabel->integer('age');
            $tabel->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('biodatas');
    }
}
