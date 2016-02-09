<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the comments for the posts.
     */
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }
    /**
     * Get the user the post belongs to .
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the subbreddit it belongs to .
     */
    public function subreddits()
    {
        return $this->belongsTo('App\Subbreddits');
    }
}
