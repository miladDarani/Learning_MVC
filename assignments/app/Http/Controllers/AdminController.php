<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $title = 'Dashboard';
        return view('admin/dashboard', compact('title'));
    }
}
