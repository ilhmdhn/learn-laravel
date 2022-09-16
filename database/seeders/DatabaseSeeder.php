<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Samsudin',
            'email' => 'samsudin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptate. Cumque, et.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente possimus praesentium voluptates? Illo a, nam exercitationem ab dolorum adipisci! Perspiciatis doloribus voluptas, veritatis in maxime magnam distinctio deserunt asperiores similique ut nostrum architecto quod? Vel nulla velit eos, quae pariatur beatae aut, distinctio nesciunt facere consequatur esse labore similique, fuga quis quod. At debitis repellat modi explicabo aspernatur tempora quis odio quae molestiae rem corrupti, repudiandae totam voluptatum assumenda harum ex! Quasi expedita accusantium ipsam unde, quidem necessitatibus possimus incidunt, ducimus asperiores aspernatur id. Esse exercitationem recusandae delectus labore officia consectetur doloremque debitis alias, id voluptates quos impedit earum omnis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptate. Cumque, et.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente possimus praesentium voluptates? Illo a, nam exercitationem ab dolorum adipisci! Perspiciatis doloribus voluptas, veritatis in maxime magnam distinctio deserunt asperiores similique ut nostrum architecto quod? Vel nulla velit eos, quae pariatur beatae aut, distinctio nesciunt facere consequatur esse labore similique, fuga quis quod. At debitis repellat modi explicabo aspernatur tempora quis odio quae molestiae rem corrupti, repudiandae totam voluptatum assumenda harum ex! Quasi expedita accusantium ipsam unde, quidem necessitatibus possimus incidunt, ducimus asperiores aspernatur id. Esse exercitationem recusandae delectus labore officia consectetur doloremque debitis alias, id voluptates quos impedit earum omnis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptate. Cumque, et.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente possimus praesentium voluptates? Illo a, nam exercitationem ab dolorum adipisci! Perspiciatis doloribus voluptas, veritatis in maxime magnam distinctio deserunt asperiores similique ut nostrum architecto quod? Vel nulla velit eos, quae pariatur beatae aut, distinctio nesciunt facere consequatur esse labore similique, fuga quis quod. At debitis repellat modi explicabo aspernatur tempora quis odio quae molestiae rem corrupti, repudiandae totam voluptatum assumenda harum ex! Quasi expedita accusantium ipsam unde, quidem necessitatibus possimus incidunt, ducimus asperiores aspernatur id. Esse exercitationem recusandae delectus labore officia consectetur doloremque debitis alias, id voluptates quos impedit earum omnis!',
            'category_id' => 2,
            'user_id' => 1
        ]);
    

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptate. Cumque, et.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente possimus praesentium voluptates? Illo a, nam exercitationem ab dolorum adipisci! Perspiciatis doloribus voluptas, veritatis in maxime magnam distinctio deserunt asperiores similique ut nostrum architecto quod? Vel nulla velit eos, quae pariatur beatae aut, distinctio nesciunt facere consequatur esse labore similique, fuga quis quod. At debitis repellat modi explicabo aspernatur tempora quis odio quae molestiae rem corrupti, repudiandae totam voluptatum assumenda harum ex! Quasi expedita accusantium ipsam unde, quidem necessitatibus possimus incidunt, ducimus asperiores aspernatur id. Esse exercitationem recusandae delectus labore officia consectetur doloremque debitis alias, id voluptates quos impedit earum omnis!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
