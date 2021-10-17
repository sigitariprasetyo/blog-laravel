<?php

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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Sigit Ari Prasetyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil facilis saepe dicta a ab numquam rerum culpa! Neque nostrum reprehenderit animi provident consequuntur dignissimos repellendus impedit harum ipsam illum eius, necessitatibus, exercitationem, eum molestias accusantium minima architecto. Sint, debitis voluptatum obcaecati quis error similique illo pariatur consequatur dolorem vero sunt velit esse et doloribus tenetur officiis nulla! Unde, exercitationem, mollitia expedita voluptatum tempore excepturi impedit praesentium culpa modi aliquam earum quisquam recusandae vitae deleniti fugiat? Reprehenderit quidem quibusdam quis!"
        ],
        [
            "title" => "Blog Kedua",
            "slug" => "blog-kedua",
            "author" => "Kevin Anantha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quis sequi harum recusandae, adipisci veritatis quaerat ea laudantium delectus nostrum exercitationem minima aliquid praesentium sint sed, ut possimus itaque aspernatur soluta corrupti omnis molestiae accusantium magni! Ex, similique! Repellat nulla voluptatem, eaque sapiente reprehenderit, molestias optio atque temporibus impedit assumenda quaerat recusandae voluptas dignissimos minima consequatur iusto voluptatibus? Doloribus harum maxime et ducimus temporibus. Ratione hic quod labore optio harum sunt voluptates qui recusandae, eius impedit ex. Praesentium, consequatur esse. Molestiae modi a fugit deserunt doloribus voluptates incidunt, maiores amet aperiam rerum mollitia ratione debitis, repellendus esse corrupti laborum tempora!"
        ]
    ];
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});

//Single page post

Route::get('/post/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Sigit Ari Prasetyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil facilis saepe dicta a ab numquam rerum culpa! Neque nostrum reprehenderit animi provident consequuntur dignissimos repellendus impedit harum ipsam illum eius, necessitatibus, exercitationem, eum molestias accusantium minima architecto. Sint, debitis voluptatum obcaecati quis error similique illo pariatur consequatur dolorem vero sunt velit esse et doloribus tenetur officiis nulla! Unde, exercitationem, mollitia expedita voluptatum tempore excepturi impedit praesentium culpa modi aliquam earum quisquam recusandae vitae deleniti fugiat? Reprehenderit quidem quibusdam quis!"
        ],
        [
            "title" => "Blog Kedua",
            "slug" => "blog-kedua",
            "author" => "Kevin Anantha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quis sequi harum recusandae, adipisci veritatis quaerat ea laudantium delectus nostrum exercitationem minima aliquid praesentium sint sed, ut possimus itaque aspernatur soluta corrupti omnis molestiae accusantium magni! Ex, similique! Repellat nulla voluptatem, eaque sapiente reprehenderit, molestias optio atque temporibus impedit assumenda quaerat recusandae voluptas dignissimos minima consequatur iusto voluptatibus? Doloribus harum maxime et ducimus temporibus. Ratione hic quod labore optio harum sunt voluptates qui recusandae, eius impedit ex. Praesentium, consequatur esse. Molestiae modi a fugit deserunt doloribus voluptates incidunt, maiores amet aperiam rerum mollitia ratione debitis, repellendus esse corrupti laborum tempora!"
        ]
    ];

    $blog_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $blog_post = $post;
        };
    };

    return view('post', [
        "title" => "Post",
        "post" => $blog_post
    ]);
});
