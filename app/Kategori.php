<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    public function wisata()
    {
    	return $this->hasMany('App\Wisata');
    }
}
