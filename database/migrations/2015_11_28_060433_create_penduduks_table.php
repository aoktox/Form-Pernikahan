<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->string('nama');
            $table->string('nik');
            $table->tinyInteger('jkel');
            $table->string('tmpLhr');
            $table->date('tglLhr');
            $table->integer('agama');
            $table->integer('pendidikan');
            $table->string('job');
            $table->integer('status_kawin');
            $table->string('kwn');
            $table->string('pasport');
            /*$table->text('alamat');
            $table->integer('prov');
            $table->integer('kab');
            $table->integer('kec');
            $table->integer('kel');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('kdPos');
            $table->string('telp');*/
            $table->string('kk');

            /*$table->timestamps();*/
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
        Schema::drop('penduduks');
    }
}
