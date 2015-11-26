<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    public function Kabupaten()
    {
        return $this->hasMany('App\Kabupaten','id_prov');
    }
}
