<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public function Desa(){
        return $this->hasMany('App\Desa','id_kecamatan');
    }

    public function Kabupaten()
    {
        return $this->belongsTo('App\Kabupaten','id_kabupaten');
    }
}
