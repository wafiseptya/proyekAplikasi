<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = "wisata";

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
