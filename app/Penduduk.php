<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public $timestamps=false;
    protected $fillable=['nama','nik','jkel','tmpLhr','tglLhr','agama','pendidikan','job','status_kawin','kwn','pasport','kk','nik'];

    public function Kepala(){
        $this->hasMany('App\Penduduk','kk','nik');
    }
}
