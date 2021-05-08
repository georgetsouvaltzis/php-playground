<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $postsData = Post::all();
        return view('posts.index',compact('postsData'));
    }

    public function show($id) {
        $foundPost = Post::findOrFail($id);
        return view('posts.show', compact('foundPost'));
    }

    public function create() {
        Post::create([
            'title' => 'George Tsouvaltzis',
            'author_name' => 'George Tsouvaltzis',
            'post_text' => 'Hello from Create  function'
        ]);
        echo "post created successfully";
    }

    public function delete($id) {
        $toDelete = Post::findOrFail($id);
        $toDelete->delete();
        echo "Deleted successfully";
    }

    public function list(Request $request) {

        $paginatedPosts = Post::paginate($request->count);
        return view('posts.list', compact('paginatedPosts'));
    }
}
