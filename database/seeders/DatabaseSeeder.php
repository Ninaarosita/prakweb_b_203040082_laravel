<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Nina Rosita',
            'email' => 'ninaarosita25@gmail.com',
            'password' => bcrypt('12345')

        ]);

        // User::create([
        //     'name' => 'Siti',
        //     'email' => 'sitinurhasanah@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
             'slug' => 'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ullam eius deserunt laborum voluptas ipsum earum itaque harum sunt, explicabo a cupiditate optio asperiores, ea accusamus dolores quae consequatur dolor vel voluptatibus velit necessitatibus reiciendis totam commodi? Doloremque magnam harum accusamus, reiciendis nulla eligendi laborum iusto modi repudiandae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ullam eius deserunt laborum voluptas ipsum earum itaque harum sunt, explicabo a cupiditate optio asperiores, ea accusamus dolores quae consequatur dolor vel voluptatibus velit necessitatibus reiciendis totam commodi? Doloremque magnam harum accusamus, reiciendis nulla eligendi laborum iusto modi repudiandae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ullam eius deserunt laborum voluptas ipsum earum itaque harum sunt, explicabo a cupiditate optio asperiores, ea accusamus dolores quae consequatur dolor vel voluptatibus velit necessitatibus reiciendis totam commodi? Doloremque magnam harum accusamus, reiciendis nulla eligendi laborum iusto modi repudiandae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ullam eius deserunt laborum voluptas ipsum earum itaque harum sunt, explicabo a cupiditate optio asperiores, ea accusamus dolores quae consequatur dolor vel voluptatibus velit necessitatibus reiciendis totam commodi? Doloremque magnam harum accusamus, reiciendis nulla eligendi laborum iusto modi repudiandae.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
