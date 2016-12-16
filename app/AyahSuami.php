<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AyahSuami extends Model
{
    protected $table='data_ayah_suami';
    protected $fillable=['nik','nama','agama','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','job',];
}
