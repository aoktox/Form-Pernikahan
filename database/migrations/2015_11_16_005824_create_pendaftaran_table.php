<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->string('id');
            $table->string('suami_id');
            $table->string('AyahSuami_id');
            $table->string('IbuSuami_id');
            $table->string('istri_id');
            $table->string('AyahIstri_id');
            $table->string('IbuIstri_id');
            $table->string('SaksiI_id');
            $table->string('SaksiII_id');
            $table->string('DataPerkawinan_id');
            $table->string('doc_id');
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pendaftaran');
    }
}
