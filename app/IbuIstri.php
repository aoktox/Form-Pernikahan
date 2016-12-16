<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IbuIstri extends Model
{
    protected $table='data_ibu_istri';
    protected $fillable=['nik','nama','agama','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','job'];
}
