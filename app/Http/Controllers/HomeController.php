<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
        $post = Post::all();

        return view('pages.home', compact('post'));
    }
    
}