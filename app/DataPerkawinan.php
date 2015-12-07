<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPerkawinan extends Model
{
    public $timestamps=false;
    protected $table='data_perkawinan';
    protected $fillable=['tglPemberkatan','tglPencatatan','jam','org','tmpBerkat','tmpCatat','badanPeradilan','noPutusan','tglPutusan','PemukaAgama','IjinPerwakilan','jlhAnak','Pelapor','agama'];
}
