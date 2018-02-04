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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
      'avatar', 'profileUrl'
    ];

    public function getRouteKeyName()
    {
      return 'name';
    }

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function getAvatar()
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=45&d=mm';
    }

    public function getProfileUrlAttribute()
    {
      return route('user.index', $this);
    }

    public function getAvatarAttribute()
    {
        return $this->getAvatar();
    }
}
