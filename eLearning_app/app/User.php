<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function following() {
        return $this->belongsToMany('App\User', 'followers', 'follower_id', 'followed_id');
    }

    public function followers() {
        return $this->belongsToMany('App\User', 'followers', 'followed_id', 'follower_id');
    }

    public function is_following($followed_id) {
        if($this->following()->where('followed_id', $followed_id)->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
