<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $appends = [
      'humanCreatedAt'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function getHumanCreatedAtAttribute()
    {
      return $this->created_at->diffForHumans();
    }
}
