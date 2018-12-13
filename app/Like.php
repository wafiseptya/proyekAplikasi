<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "likes";

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function artikel()
    {
    	return $this->belongsTo('App\Artikel', 'artikel_id');
    }
}
