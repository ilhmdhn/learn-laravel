<?php

namespace App\Models;


class Post {
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ilham Dohaan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque architecto atque facere! Mollitia necessitatibus possimus alias dolores nobis maiores, vitae et esse aliquid voluptatibus rerum aperiam numquam corporis modi, perferendis nemo autem in laborum sed consectetur. Corporis incidunt adipisci voluptatem, at vel sequi voluptatibus eaque, ex harum officia illum, pariatur sapiente. Iusto magni totam facilis eius, voluptate iste itaque repudiandae officiis quod eveniet est cumque dolore harum quidem, modi non possimus nemo delectus nesciunt fugiat? Mollitia deserunt aperiam ipsam velit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Samsudin Jadab",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque architecto atque facere! Mollitia necessitatibus possimus alias dolores nobis maiores, vitae et esse aliquid voluptatibus rerum aperiam numquam corporis modi, perferendis nemo autem in laborum sed consectetur. Corporis incidunt adipisci voluptatem, at vel sequi voluptatibus eaque, ex harum officia illum, pariatur sapiente. Iusto magni totam facilis eius, voluptate iste itaque repudiandae officiis quod eveniet est cumque dolore harum quidem, modi non possimus nemo delectus nesciunt fugiat? Mollitia deserunt aperiam ipsam velit."
        ]
    ];

    public static function all(){
        return self::$blog_posts;
    }

    public static function find($slug){
        $posts = self::$blog_posts;

        foreach ($posts as $post) {
            if($post["slug"] === $slug){
                return $post;
            }
        }
    }
}