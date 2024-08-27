<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        return view('pages.create-post');
    }
    public function add_post(Request $request)
    {
       $post = new Post;

       $post->name = $request->name;
       $post->email = $request->email;
       $post->date = $request->date;

       $image = $request->image;

        if($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $post->image=$imagename;
        }

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('list-post')->with('message2', 'Post Added Successfully');
    
    }

    

    public function lists()
    {
        $post = Post::all();
        return view('pages.list-post' , compact('post'));
    }

    public function delete_post($id) 
    {
        $post = Post::findOrFail($id);

        $post->delete();

       return redirect()->route('list-post')->with('message', 'Post Deleted Successfully');

    }

    public function update_post($id) 
    {
        $post = Post::findOrFail($id);

        return view('pages.update-post', compact('post'));

    }

    public function send_update_post(Request $request, $id) 
    {
        $post = Post::findOrFail($id);

       $post->name = $request->name;
       $post->email = $request->email;
       $post->date = $request->date;

       $image = $request->image;

        if($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $post->image=$imagename;
        }

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('list-post')->with('message2', 'Post Updated Successfully');;

    }
}
