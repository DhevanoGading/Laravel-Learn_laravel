<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
