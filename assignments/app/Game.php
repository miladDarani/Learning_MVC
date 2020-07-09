<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{   
    use SoftDeletes;

    protected $fillable = [
        'title',
        'abstract',
        'body',
        'featured_image',
        'category_id',
        'year'
    ];
    /**
     * each category has many game
     * each game has only one category
     * @return 
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
