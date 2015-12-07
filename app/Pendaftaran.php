<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table ="pendaftaran";
    protected $fillable=['id','suami_id','AyahSuami_id','IbuSuami_id','istri_id','AyahIstri_id','IbuIstri_id','SaksiI_id','SaksiII_id','DataPerkawinan_id','doc_id'];
}
