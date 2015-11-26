<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ktpSuami');
            $table->string('ktpIstri');
            $table->string('sk');
            $table->string('foto');
            $table->string('aktaSUami');
            $table->string('aktaIstri');
            $table->string('aktaCerai');
            $table->string('skABRI');
            $table->string('janji');
            $table->string('skAgama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doc');
    }
}
