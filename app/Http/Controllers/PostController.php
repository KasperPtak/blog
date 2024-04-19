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

        // TODO: pa
        // $client = new Client();
        // $response = $client->post('https://api.openai.com/v1/completions', [
        //     'headers' => [
        //         'Authorization' => 'Bearer TOKEN_IN_ENV',
        //         'Content-Type' => 'application/json',
        //     ],
        //     'json' => [
        //         'model' => 'gpt-3.5-turbo-0125', 
        //         'prompt' => 'Testing a prompt here!',
        //         'max_tokens' => 1000,
        //     ],
        // ]);
        // // Extract the generated content from the API response
        // $generatedContent = json_decode($response->getBody()->getContents(), true)['choices'][0]['text'];
        // return response()->json($generatedContent);

        Post::create($validatedData);

        return redirect('/')->with('success', 'Post created successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/')->with('success', 'Post deleted successfully!');
    }
}
