<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
        $data['posts'] = Post::all();
        $data['title'] = 'All blog Posts';
        return view('posts/index', $data);

    }

    public function show(Post $post){
        $data['post'] = $post;
        
        return view('posts/show', $data);
    }
}
