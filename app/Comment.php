<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function post(){
    	return $this->belongsTo('App\Post');
    }

    public function parentComment(){
    	return $this->belongsTo('App\Comment');
    }

    public function childComments()
   {
       return $this->hasMany('App\Comment');
   }
}
