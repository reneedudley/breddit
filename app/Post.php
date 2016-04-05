<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    post function user(){
    	return $this->belongsTo('App\User');
    }
    post function subbreddit(){
    	return $this->belongsTo('App\Subbreddit');
    }
    post function comments(){
    	return $this->hasMany('App\Comment');
    }
}
