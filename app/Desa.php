<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';

    public function Kecamatan(){
        return $this->belongsTo('App\Kecamatan','id_kecamatan');
    }

}
