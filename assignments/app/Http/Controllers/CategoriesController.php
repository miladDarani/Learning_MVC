<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function show($id){
        
        $category=Category::find($id);
        
        //get with user its related to 
        // $comments = $post->comments()->with('user')->get();
        

        return view('/category', compact('category'));
    }
}
