<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(agama_seeder::class);
        $this->call(Status_Kawin_seeder::class);
        $this->call(Pendidikan_seeder::class);
        //$this->call(Penduduk_seeder::class);
        Model::reguard();
    }
}
