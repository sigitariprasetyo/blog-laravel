<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sigit Ari Prasetyo",
        "email" => "sigit@gmail.com",
        "image" => "sap.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'post']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => "Category",
        "category" => $category->name,
        "posts" => $category->posts
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        "page" => "Post by Author",
        "title" => "Post by Author",
        "posts" => $author->posts
    ]);
});
