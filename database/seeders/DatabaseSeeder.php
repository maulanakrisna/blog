<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Maulana K. Adhitya',
            'email' => 'maulanakrisna@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Annet Juanita',
            'email' => 'annetjuanita@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
        ]);

        Post::create([
            'title' => 'Kotlin untuk Mobile Programming',
            'slug' => 'kotlin-untuk-mobile-programming',
            'category_id' => '2',
            'user_id' => '1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis maxime, illo distinctio perferendis suscipit magnam nihil cum et earum cumque.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus itaque vel rem sunt dicta ratione debitis, ipsam excepturi exercitationem nihil aliquid nulla a eaque ut rerum ab eius id nam quas reiciendis illum deleniti iste maxime! Dicta, tempore minus excepturi voluptatibus ipsam praesentium. Ut porro error eaque? Dolore, tempora, ipsa atque numquam maxime distinctio corporis rem voluptas quod natus unde blanditiis cumque iste dolor consequuntur expedita animi officiis veritatis, ex veniam beatae. Nulla est, natus dolorem saepe maxime voluptates accusamus sint nobis unde repudiandae labore doloremque facere? Tenetur exercitationem beatae ipsam! Architecto minus quod accusantium eligendi molestias inventore reprehenderit explicabo!',
        ]);

        Post::create([
            'title' => 'PHP untuk Web Programming',
            'slug' => 'php-untuk-web-programming',
            'category_id' => '1',
            'user_id' => '1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis maxime, illo distinctio perferendis suscipit magnam nihil cum et earum cumque.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus itaque vel rem sunt dicta ratione debitis, ipsam excepturi exercitationem nihil aliquid nulla a eaque ut rerum ab eius id nam quas reiciendis illum deleniti iste maxime! Dicta, tempore minus excepturi voluptatibus ipsam praesentium. Ut porro error eaque? Dolore, tempora, ipsa atque numquam maxime distinctio corporis rem voluptas quod natus unde blanditiis cumque iste dolor consequuntur expedita animi officiis veritatis, ex veniam beatae. Nulla est, natus dolorem saepe maxime voluptates accusamus sint nobis unde repudiandae labore doloremque facere? Tenetur exercitationem beatae ipsam! Architecto minus quod accusantium eligendi molestias inventore reprehenderit explicabo!',
        ]);

        Post::create([
            'title' => 'Java untuk Web Programming',
            'slug' => 'java-untuk-web-programming',
            'category_id' => '1',
            'user_id' => '2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis maxime, illo distinctio perferendis suscipit magnam nihil cum et earum cumque.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus itaque vel rem sunt dicta ratione debitis, ipsam excepturi exercitationem nihil aliquid nulla a eaque ut rerum ab eius id nam quas reiciendis illum deleniti iste maxime! Dicta, tempore minus excepturi voluptatibus ipsam praesentium. Ut porro error eaque? Dolore, tempora, ipsa atque numquam maxime distinctio corporis rem voluptas quod natus unde blanditiis cumque iste dolor consequuntur expedita animi officiis veritatis, ex veniam beatae. Nulla est, natus dolorem saepe maxime voluptates accusamus sint nobis unde repudiandae labore doloremque facere? Tenetur exercitationem beatae ipsam! Architecto minus quod accusantium eligendi molestias inventore reprehenderit explicabo!',
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
