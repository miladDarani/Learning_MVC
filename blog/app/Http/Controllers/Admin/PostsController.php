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

        if(!empty($valid['featured_image'])){
        //get the uploaded file
        $file = $request->file('featured_image');
        //get the original file name
        $featured_image = time(). '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('images', $featured_image);

        }

        Post::create([

            'title' => $valid['title'],
            'abstract'=>$valid['abstract'],
            'body'=>$valid['body'],
            'status'=>$valid['status'] ?? 'public',
            'category_id'=>$valid['category_id'] ?? 1,
            'featured_image' => $featured_image ?? ''
            
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
        

        $post = Post::find($id);
        $categories = Category::all();
        $title = 'Edit Post';
        return view('admin/posts/edit', compact('title', 'post', 'categories'));






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string|max:255',
            'abstract' => 'required|string|max:500',
            'body' => 'required|string',
            'status' => 'nullable|string',
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable|integer'
        ]);

        if(!empty($valid['featured_image'])){
        //get the uploaded file
        $file = $request->file('featured_image');
        //get the original file name
        $featured_image = time(). '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('images', $featured_image);

        }

        $post = Post::find($valid['id']);
        $post->title = $valid['title'];
        $post->abstract = $valid['abstract'];
        $post->body = $valid['body'];
        $post->category_id = $valid['category_id'] ?? 1;
        $post->status = $valid['status'] ?? 'public';
        if(!empty($featured_image)){
            $post->featured_image = $featured_image;
        }

        if($post->save()){
            return redirect('admin/posts')->with('success', 'Post have been updated');
        }

        return redirect('admin/posts')->with('error', 'There was a problem');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //validate , make sure id is passed in request
        $valid = $request->validate([
            'id'=> 'required|integer'
        ]);
            if(Post::find($valid['id'])->delete()){

                return back()->with('success', 'Post has been deleted!');
            }
            return back()->with('error', "There was a problem deleting the post");
        
    }
}
