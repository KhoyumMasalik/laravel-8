<?php

namespace Database\Seeders;

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
            'name' => 'Khoyum Masalik',
            'username' => 'khoyummasalikk',
            'email' => 'khoyum28oct@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(4)->create();
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'progamming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'UI-UX',
            'slug' => 'ui-ux',
        ]);
        Category::create([
            'name' => 'Sofware-Engineer',
            'slug' => 'sofware-engineer',
        ]);
        Post::factory(20)->create();

    }
}
