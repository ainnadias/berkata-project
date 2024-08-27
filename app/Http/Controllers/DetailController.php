<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class DetailController extends Controller
{
    public function index($id)
    {

         $post = Post::find($id);
        return view('pages.details' , compact('post'));
    }
}
