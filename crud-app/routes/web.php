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
        "tittle" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "azizah khairun nisa",
        "email" => "azizahichabts@gmail.com",
        "image" => "1.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "azizah khairun nisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat id, quis consequuntur quisquam, atque voluptatum eveniet perspiciatis tenetur quas veniam ipsa dolorum quod! Repellendus atque et quae suscipit tempora?"
        ],
        [
            "tittle" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "icha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat id, quis consequuntur quisquam, atque voluptatum eveniet perspiciatis tenetur quas veniam ipsa dolorum quod! Repellendus atque et quae suscipit tempora?"
        ]
    ];

    return view('posts', [
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "azizah khairun nisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat id, quis consequuntur quisquam, atque voluptatum eveniet perspiciatis tenetur quas veniam ipsa dolorum quod! Repellendus atque et quae suscipit tempora?"
        ],
        [
            "tittle" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "icha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat id, quis consequuntur quisquam, atque voluptatum eveniet perspiciatis tenetur quas veniam ipsa dolorum quod! Repellendus atque et quae suscipit tempora?"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post',[
            "tittle" => "single post",
            "post" => $new_post
        ]
    );
});
