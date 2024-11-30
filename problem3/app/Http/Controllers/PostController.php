<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends BaseController
{
    // Removed the AuthorizesRequests to simplify the solution
    use ValidatesRequests;

    /**
     * Show the users has posts, with each post title
     */
    public function index()
    {
        // This will retrieve all the post, but sure we can apply any filters
        // using where, I'm using this approach just for simplicity
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
