<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AyahIstri extends Model
{
    protected $table='data_ayah_istri';
    protected $fillable=['nik','nama','agama','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','job',];
}
