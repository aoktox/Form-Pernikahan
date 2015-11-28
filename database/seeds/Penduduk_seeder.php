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
        $i=0;
        while($i<10){
            $data=[
                'nik'=> $faker->creditCardNumber,
                'nama'=> $faker->name,
                'kk'=> random_int(1,200)
            ];
            \App\Penduduk::create($data);
            $i++;
        }
    }
}
