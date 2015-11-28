<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suami extends Model
{
    protected $table='data_suami';
    protected $fillable = ['nik','nama','kk','pasport','tmpLhr','tglLhr','alamat','prov','kab','kec','kel','rt','rw','kdPos','telp','pendidikan','job','anakKe','agama','status','kawinKe','kwn','created_at','updated_at'];
}
