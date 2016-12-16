<?php

use Illuminate\Database\Seeder;

class Penduduk_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $jkel = ["L","P"];
        DB::table('penduduks')->delete();
        foreach(range(1,20) as $index){
            $data=[
                'nama'=>$faker->name,
                'nik'=>rand(1111111111111111,9999999999999999),
                //'jkel'=>$faker->numberBetween(1,2),
                'jkel'=>$jkel[$faker->numberBetween(0,1)],
                'tmpLhr'=>$faker->city,
                'tglLhr'=>$faker->date(),
                'agama'=>$faker->numberBetween(1,7),
                'pendidikan'=>$faker->numberBetween(1,10),
                'job'=>$faker->company,
                'status_kawin'=>$faker->numberBetween(1,4),
                'kwn'=>'WNI',
                'pasport'=>$faker->creditCardNumber,
                'kk'=>$faker->randomNumber($nbDigits = NULL),
            ];
            \App\Penduduk::create($data);
        }
    }
}
