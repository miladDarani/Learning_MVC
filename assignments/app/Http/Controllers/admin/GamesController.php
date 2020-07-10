<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use \App\Game;
use \App\Category;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Manage games";
        $games = Game::with('category')->latest()->paginate(10);
        return view('admin/games/index', compact('title', 'games') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title= 'Create a new Game';
        $categories = Category::all();
        return view('admin/games/create', compact('title', 'categories'));
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
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable|integer',
            'year'=> 'nullable|integer'
        ]);

        if(!empty($valid['featured_image'])){
        //get the uploaded file
        $file = $request->file('featured_image');
        //get the original file name
        $featured_image = time(). '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('public/images', $featured_image);
        

        }

        Game::create([

            'title' => $valid['title'],
            'abstract'=>$valid['abstract'],
            'body'=>$valid['body'],
            'category_id'=>$valid['category_id'] ?? 1,
            'featured_image' => $featured_image ?? '' ,
            'year' => $valid['year']
            
        ]);
        return redirect('/admin/games')->with('success', 'Your Game was saved successfully');
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
        

        $game = Game::find($id);
        $categories = Category::all();
        $title = 'Edit Game';
        return view('admin/games/edit', compact('title', 'game', 'categories'));






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
            'year' => 'nullabe|integer',
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable|integer'
        ]);

        if(!empty($valid['featured_image'])){
        //get the uploaded file
        $file = $request->file('featured_image');
        //get the original file name
        $featured_image = time(). '_' . $file->getClientOriginalName();
        //save the image
        $path = $file->storeAs('public/images', $featured_image);

        }

        $game = Game::find($valid['id']);
        $game->title = $valid['title'];
        $game->abstract = $valid['abstract'];
        $game->body = $valid['body'];
        $game->year = $valid['year'];
        $game->category_id = $valid['category_id'] ?? 1;
        if(!empty($featured_image)){
            $game->featured_image = $featured_image;
        }

        if($game->save()){
            return redirect('admin/games')->with('success', 'Game have been updated');
        }

        return redirect('admin/games')->with('error', 'There was a problem');

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
            if(Game::find($valid['id'])->delete()){

                return back()->with('success', 'Game has been deleted!');
            }
            return back()->with('error', "There was a problem deleting the Game");
        
    }
}
