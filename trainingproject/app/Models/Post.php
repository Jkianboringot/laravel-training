<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function comment(){
        return $this->hasMany(Comment::class);
    }

public function user(){
    return $this->belongsTo(User::class);
}
}

