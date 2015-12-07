<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaksiII extends Model
{
    protected $table='data_saksiII';
    protected $fillable=['nik','nama','agama','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','job'];
}
