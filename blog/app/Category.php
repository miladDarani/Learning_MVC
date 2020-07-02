<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {   
        //returns the relatiin ship between the two of them
        return $this->hasMany(Post::class);
    }
}
