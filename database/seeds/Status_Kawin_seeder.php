<?php

use Illuminate\Database\Seeder;

class Status_Kawin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_kawin')->insert([
            array('status'=> 'Belum Kawin'),
            array('status'=> 'Kawin'),
            array('status'=> 'Cerai Hidup'),
            array('status'=> 'Cerai Mati'),
        ]);
    }
}
