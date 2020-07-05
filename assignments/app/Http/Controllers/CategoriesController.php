<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{   
    /**
     * returns specific category
     * @param  integer
     * @return array
     */
    public function show($id){
        
        $category=Category::find($id);
        return view('/category', compact('category'));
    }
}
