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

    public function show(Post $post){
        $data['post'] = $post;
        $data['title'] = "Blog Show";
        return view('posts/show', $data);
    }
}
