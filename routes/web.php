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

Route::get('/about', function(){
    return view('about',[
        "title" => "About",
        "name"=> "Thor",
        "email"=>"thor@avenger.co",
        "image"=> "thor.png"
    ]);
});


Route::get('/blog', function(){
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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

    $new_post = [];

    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Singe Post",
        "post" => $new_post
    ]);
});