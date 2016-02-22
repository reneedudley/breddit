<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * Get the user the comment belongs to .
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the post it belongs to .
     */
    public function subreddits()
    {
        return $this->belongsTo('App\Post');
    }
    /**
     * Get the parent comment for the comment .
     */
    public function parentComment()
    {
        return $this->belongsTo('App\Comment');
    }
}
