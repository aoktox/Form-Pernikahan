<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPerkawinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perkawinan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('tglPemberkatan');
            $table->timestamp('tglPencatatan');
            $table->time('jam');
            $table->string('org');
            $table->string('tmpBerkat');
            $table->string('tmpCatat');
            $table->string('badanPeradilan');
            $table->string('noPutusan');
            $table->timestamp('tglPutusan');
            $table->string('PemukaAgama');
            $table->string('IjinPerwakilan');
            $table->integer('jlhAnak');
            $table->string('Pelapor');
            $table->integer('agama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_perkawinan');
    }
}