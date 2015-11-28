<?php

use Illuminate\Database\Seeder;

class Pendidikan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikan')->insert([
            array('pendidikan'=> 'Tidak/Belum Sekolah'),
            array('pendidikan'=> 'Belum Tamat SD/Sederajat'),
            array('pendidikan'=> 'Tamat SD/Sederajat'),
            array('pendidikan'=> 'SLTP/Sederajat'),
            array('pendidikan'=> 'SLTA/Sederajat'),
            array('pendidikan'=> 'DIPLOMA I/II'),
            array('pendidikan'=> 'AKADEMI/DIPLOMA III/SARJANA MUDA'),
            array('pendidikan'=> 'DIPLOMA IV/STRATA I'),
            array('pendidikan'=> 'STRATA-II'),
            array('pendidikan'=> 'STRATA-III')
        ]);
    }
}
