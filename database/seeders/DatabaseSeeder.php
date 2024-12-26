<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // News::create([
        //     'title' => 'Hot News',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'hot-news',
        //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Curabitur ac diam at dolor viverra eleifend. Nulla facilisi. Donec vel velit non nisi maximus varius.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        News::factory(20)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
