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

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}/show', 'PostsController@show');

Route::post('/comments', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
