<?php

use Illuminate\Database\Seeder;

class agama_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agama')->insert([
            array('nama'=> 'Islam'),
            array('nama'=> 'Kristen'),
            array('nama'=> 'Khatolik'),
            array('nama'=> 'Hindu'),
            array('nama'=> 'Budha'),
            array('nama'=> 'Khonghucu'),
            array('nama'=> 'Kepercayaan')
        ]);
    }
}
