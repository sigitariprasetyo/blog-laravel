<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = 'All Posts';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'By ' . $author->name;
        }

        return view('posts', [
            "page" => "All Post",
            "title" => "All Post " . $title,
            "active" => 'posts',
            "posts" =>  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
