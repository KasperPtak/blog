<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // query database for posts and return the view with array of posts
    public function index()
    {
        // get posts ordered by creation date
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($validatedData);

        return redirect('/')->with('success', 'Post created successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/')->with('success', 'Post deleted successfully!');
    }
}
