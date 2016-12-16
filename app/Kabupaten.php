<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    public function Kecamatan(){
        return $this->hasMany('App\Kecamatan','id_kabupaten');
    }

    public function Provinsi(){
        return $this->belongsTo('App\Provinsi','id_prov');
    }
}
