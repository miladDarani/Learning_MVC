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

Route::get('/', function () {
    $data['title'] = "Home Page";
    return view('main', $data);
});


Route::get('/students', function(){
    $data['title'] = "Student List";
    return view('student_list', $data);
});

Route::get('/detail', function(){
    $data['title'] = "Student Detail";
    return view('student_detail', $data);
});