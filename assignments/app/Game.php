<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{   
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
