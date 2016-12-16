<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaksiI extends Model
{
    protected $table='data_saksiI';
    protected $fillable=['nik','nama','agama','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','job'];
}
