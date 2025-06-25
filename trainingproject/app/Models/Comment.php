<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongTo(User::class);
    }

     public function post()
    {
        return $this->belongTo(Post::class);
    }
}
