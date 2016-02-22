<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the subbreddits for the user.
     */
    public function subbreddits()
    {
        return $this->hasMany('App\Subbreddit');
    }
    /**
     * Get the posts for the user.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
     /**
     * Get the subscribed subbreddits for the user.
     */
    public function subscribedSubbreddits()
    {
        return $this->belongsToMany('App\Subbreddit ');
    }
    /**
     * Get the comments for the user.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
