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
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Muhammad Dhevano Gading Az Zamzami",
        "email" => "dhevanogading@gmail.com",
        "image" => "alluka zoldyck.jpg"
    ]);
});



Route::get('/posts', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhevano",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex praesentium placeat eum explicabo sunt eveniet adipisci soluta inventore distinctio illum repudiandae mollitia, porro recusandae tempora error aut magni minima excepturi omnis quia ipsam. Incidunt, aut molestiae at harum ullam architecto deleniti reprehenderit voluptates, distinctio in voluptatibus accusantium voluptas, sequi repudiandae nesciunt fuga nemo fugiat sint magnam exercitationem tempore nostrum velit. Recusandae harum nobis, deleniti cum accusamus, vitae aspernatur ullam ratione adipisci corrupti quas minima odit ipsum dolores nisi ex sint? Modi illo inventore odio, tempora eligendi laboriosam itaque quod ipsam ad reprehenderit ipsa ullam maiores impedit corporis! Animi, minima."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gading",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex praesentium placeat eum explicabo sunt eveniet adipisci soluta inventore distinctio illum repudiandae mollitia, porro recusandae tempora error aut magni minima excepturi omnis quia ipsam. Incidunt, aut molestiae at harum ullam architecto deleniti reprehenderit voluptates, distinctio in voluptatibus accusantium voluptas, sequi repudiandae nesciunt fuga nemo fugiat sint magnam exercitationem tempore nostrum velit. Recusandae harum nobis, deleniti cum accusamus, vitae aspernatur ullam ratione adipisci corrupti quas minima odit ipsum dolores nisi ex sint? Modi illo inventore odio, tempora eligendi laboriosam itaque quod ipsam ad reprehenderit ipsa ullam maiores impedit corporis! Animi, minima."
        ]
    ];
    return view('posts', [
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});

//single post page

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhevano",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex praesentium placeat eum explicabo sunt eveniet adipisci soluta inventore distinctio illum repudiandae mollitia, porro recusandae tempora error aut magni minima excepturi omnis quia ipsam. Incidunt, aut molestiae at harum ullam architecto deleniti reprehenderit voluptates, distinctio in voluptatibus accusantium voluptas, sequi repudiandae nesciunt fuga nemo fugiat sint magnam exercitationem tempore nostrum velit. Recusandae harum nobis, deleniti cum accusamus, vitae aspernatur ullam ratione adipisci corrupti quas minima odit ipsum dolores nisi ex sint? Modi illo inventore odio, tempora eligendi laboriosam itaque quod ipsam ad reprehenderit ipsa ullam maiores impedit corporis! Animi, minima."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gading",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ex praesentium placeat eum explicabo sunt eveniet adipisci soluta inventore distinctio illum repudiandae mollitia, porro recusandae tempora error aut magni minima excepturi omnis quia ipsam. Incidunt, aut molestiae at harum ullam architecto deleniti reprehenderit voluptates, distinctio in voluptatibus accusantium voluptas, sequi repudiandae nesciunt fuga nemo fugiat sint magnam exercitationem tempore nostrum velit. Recusandae harum nobis, deleniti cum accusamus, vitae aspernatur ullam ratione adipisci corrupti quas minima odit ipsum dolores nisi ex sint? Modi illo inventore odio, tempora eligendi laboriosam itaque quod ipsam ad reprehenderit ipsa ullam maiores impedit corporis! Animi, minima."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
