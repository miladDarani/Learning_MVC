<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
        $class = 'posts';
        $posts = Post::with('category')->latest()->get();
        $title = 'Recent Posts';
        return view('posts/index', compact('posts', 'title', 'class'));

    }

    public function show($id){
        
        $post=Post::find($id);
        //get with user its related to 
        $comments = $post->comments()->with('user')->get();
        $title = $post->title;
        return view('posts/show', compact('post', 'comments','title',));
    }
}
