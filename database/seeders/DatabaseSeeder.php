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
        User::factory(10)->create();
        // User::create([
        //     'name' => "Faisal Ridhani",
        //     'email' => "faisalachmad.ff@gmail.com",
        //     'password' => bcrypt('123456')
        // ]);
        // User::create([
        //     'name' => "Teguh firman gautama",
        //     'email' => "teguh.fg@gmail.com",
        //     'password' => bcrypt('123456')
        // ]);
        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming"
        ]);
        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => "judul-pertama",
        //     'excerpt' => "lorem impsn",
        //     'body' => "enim at in obcaecati tempora beatae laudantium voluptate aperiam
        //     excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
        //     quod voluptate. Omnis, dolor",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => "judul-kedua",
        //     'excerpt' => "lorem impsn",
        //     'body' => "enim at in obcaecati tempora beatae laudantium voluptate aperiam
        //     excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
        //     quod voluptate. Omnis, dolor",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'slug' => "judul-ke-tiga",
        //     'excerpt' => "lorem impsn",
        //     'body' => "enim at in obcaecati tempora beatae laudantium voluptate aperiam
        //     excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
        //     quod voluptate. Omnis, dolor",
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => "Judul keempat",
        //     'slug' => "judul-ke-empat",
        //     'excerpt' => "lorem impsn",
        //     'body' => "enim at in obcaecati tempora beatae laudantium voluptate aperiam
        //     excepturi delectus recusandae nemo aliquam deleniti temporibus itaque? Modi,
        //     quod voluptate. Omnis, dolor",
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
