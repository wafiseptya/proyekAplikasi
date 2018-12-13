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
    public function komentar()
    {
        return $this->hasMany('App\Comment');
    }
    public function like()
    {
        return $this->hasMany('App\Like');
    }
    public function users()
    {
    	return $this->belongsTo('App\User', 'users_id');
    }
}
