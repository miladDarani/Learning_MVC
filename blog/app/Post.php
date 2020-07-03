<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'abstract',
        'body',
        'featured_image'
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
