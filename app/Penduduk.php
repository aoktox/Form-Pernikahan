<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable=['nik','nama','kk'];

    public function Kepala(){
        $this->hasMany('App\Penduduk','kk','nik');
    }
}
