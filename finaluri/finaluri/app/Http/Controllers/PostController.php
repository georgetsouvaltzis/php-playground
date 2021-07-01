<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Posts::all();
        return $posts;
    }

    public function store(Request $request) {
         $request->validate([
            'post_name' => 'required',
            'post_content'=> 'required'
        ]);

        $post = new Posts;
        $post->post_name = $request->post_name;
        $post->post_content = $request->post_content;
        $post->user_id = auth()->id();
        $post->created_at = now()->timestamp;
        $post->save();
        return "Post created successfully";
    }
    public function update(Request $request) {

    }

    public function show(Request $request) {
        return Posts::find($request->id);
    }

    public function myPosts() {
        return Posts::where('user_id', '=', auth()->id())->get();
    }
}
