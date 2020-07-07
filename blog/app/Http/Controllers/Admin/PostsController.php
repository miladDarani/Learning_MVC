<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Post;
use \App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $title = "Manage Posts";
        $posts = Post::with('category')->latest()->paginate(10);
        return view('admin/posts/index', compact('title', 'posts') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title= 'Create a new post';
        $categories = Category::all();
        return view('admin/posts/create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'required|string|max:500',
            'body' => 'required|string',
            'status' => 'nullable|string',
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable|integer'
        ]);

        //get the uploaded file
        $file = $request->file('featured_image');
        //get the original file name
        $featured_image = time(). '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('images', $featured_image);
        
        Post::create([

            'title' => $valid['title'],
            'abstract'=>$valid['abstract'],
            'body'=>$valid['body'],
            'status'=>$valid['status'],
            'category_id'=>$valid['category_id'],
            'featured_image' => $featured_image
            
        ]);
        return redirect('/admin/posts')->with('success', 'Your post was saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
