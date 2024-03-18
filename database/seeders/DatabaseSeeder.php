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
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahmad Muhyiddin',
            'email' => 'muhyi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Bang Yi',
            'email' => 'bangyi@gmail.com',
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
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil consequatur animi. Repellat, necessitatibus modi quod ratione nam repudiandae corrupti itaque porro aut voluptatibus voluptates qui eius recusandae quasi nesciunt ab deserunt rem tempora quos debitis perspiciatis! Aut accusantium odit assumenda, est ad eius tempora sunt illum corporis, dolores placeat obcaecati natus eveniet nemo porro deserunt! Amet labore repudiandae praesentium fuga obcaecati, numquam adipisci consequatur alias. Incidunt delectus minima officia ullam aut exercitationem praesentium ipsum sint minus adipisci tempora necessitatibus, ducimus eaque nobis nemo dicta laborum facilis corrupti sapiente saepe maiores.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil consequatur animi. Repellat, necessitatibus modi quod ratione nam repudiandae corrupti itaque porro aut voluptatibus voluptates qui eius recusandae quasi nesciunt ab deserunt rem tempora quos debitis perspiciatis! Aut accusantium odit assumenda, est ad eius tempora sunt illum corporis, dolores placeat obcaecati natus eveniet nemo porro deserunt! Amet labore repudiandae praesentium fuga obcaecati, numquam adipisci consequatur alias. Incidunt delectus minima officia ullam aut exercitationem praesentium ipsum sint minus adipisci tempora necessitatibus, ducimus eaque nobis nemo dicta laborum facilis corrupti sapiente saepe maiores.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil consequatur animi. Repellat, necessitatibus modi quod ratione nam repudiandae corrupti itaque porro aut voluptatibus voluptates qui eius recusandae quasi nesciunt ab deserunt rem tempora quos debitis perspiciatis! Aut accusantium odit assumenda, est ad eius tempora sunt illum corporis, dolores placeat obcaecati natus eveniet nemo porro deserunt! Amet labore repudiandae praesentium fuga obcaecati, numquam adipisci consequatur alias. Incidunt delectus minima officia ullam aut exercitationem praesentium ipsum sint minus adipisci tempora necessitatibus, ducimus eaque nobis nemo dicta laborum facilis corrupti sapiente saepe maiores.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam vitae laborum sed in! Impedit eum, repellat odit nihil consequatur animi. Repellat, necessitatibus modi quod ratione nam repudiandae corrupti itaque porro aut voluptatibus voluptates qui eius recusandae quasi nesciunt ab deserunt rem tempora quos debitis perspiciatis! Aut accusantium odit assumenda, est ad eius tempora sunt illum corporis, dolores placeat obcaecati natus eveniet nemo porro deserunt! Amet labore repudiandae praesentium fuga obcaecati, numquam adipisci consequatur alias. Incidunt delectus minima officia ullam aut exercitationem praesentium ipsum sint minus adipisci tempora necessitatibus, ducimus eaque nobis nemo dicta laborum facilis corrupti sapiente saepe maiores.',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
