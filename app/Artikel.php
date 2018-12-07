<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikels";
    public function wisata()
    {
    	return $this->belongsTo('App\Wisata', 'wisata_id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User', 'users_id');
    }
}
