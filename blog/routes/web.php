<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $data['title'] = "Welcome to the new Main";
    return view('welcome', $data);
});

Route::get('/about', function(){
    $data['title'] = "About us";
    return view('about', $data);
});

Route::get('/test', function(){
    $data['title'] = "About us";
    return view('layouts/blog');
});

Route::get('/test1', function(){
    $data['title'] = "Test 1";
    return view('layouts/blog');
});



// OPTION 1

// Route::get('/deals', function(){
//     $data['title'] = 'Deals for members';
//     return view('deals', $data);
// })->middleware('auth');

// Route::get('/members', function (){
//     $data['title'] = 'Members Only';
//     return view('members');
// })->middleware('auth');
// 
// 

//OPTION 2
Route::middleware('auth')->group(function(){

Route::get('/deals', function(){
    $data['title'] = 'Deals for members';
    return view('deals', $data);
    });

Route::get('/members', function (){
    $data['title'] = 'Members Only';
    return view('members',$data);
    });

});

Route::middleware('admin')->group(function(){

    Route::get('/admin/posts', 'Admin\PostsController@index');
    Route::get('/admin', 'AdminController@home');
    Route::get('admin/posts/create', 'Admin\PostsController@create');
    Route::post('admin/posts/create', 'Admin\PostsController@store');
});




Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}/show', 'PostsController@show');

Route::post('/comments', 'CommentsController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


