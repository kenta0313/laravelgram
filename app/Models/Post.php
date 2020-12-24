<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    Public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
  public function likes()
  {
    return $this->hasMany('App\Models\Like');
  }

  Public function likedBy($user)
  {
    return Like::where('user_id', $user->id)->where('post_id', $this->id);
  }

  public function comments()
  {
    return $this->hasMany('App\Models\Comment');
  }
}
