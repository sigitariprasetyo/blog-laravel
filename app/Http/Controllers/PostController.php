<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "page" => "All Post",
            "title" => "All Post",
            "active" => 'posts',
            "posts" => Post::latest()->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "post" => $post,
            "active" => 'posts',
        ]);
    }
}
