<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

    /**
     * each category has many game
     * each game has only one category
     * @return 
     */
    public function games()
    {
        return $this->hasMany(Game::class);
    }

    
}
