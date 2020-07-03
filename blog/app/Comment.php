<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Elequesnt relatioship between two tables
     * @return relatioship 
     */
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
}
