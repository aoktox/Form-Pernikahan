<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSaksiIITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_saksiII', function (Blueprint $table) {
            $table->string('nik');
            $table->string('nama');
            $table->integer('agama');
            $table->string('tmpLhr');
            $table->date('tglLhr');
            $table->text('alamat');
            $table->integer('prov');
            $table->integer('kab');
            $table->integer('kec');
            $table->integer('kel');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('kdPos');
            $table->string('telp');
            $table->integer('job');
            $table->timestamps();
            $table->primary('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_saksiII');
    }
}
