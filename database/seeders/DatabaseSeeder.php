<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
            'name' => 'Azka ainurridho',
            'username' => 'azkaainurridho',
            'email' => 'azkaainurridho@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::factory(5)->create();

        Product::factory(200)->create();

        Category::create([
            'title' => 'Menswear',
            'slug' => 'menswear'
        ]);

        Category::create([
            'title' => "Women's clothing",
            'slug' => "womens-clothing"
        ]);

        Category::create([
            'title' => 'Famous brand',
            'slug' => 'famous-brand'
        ]);

        Category::create([
            'title' => 'Electronic',
            'slug' => 'electronic'
        ]);

        Category::create([
            'title' => 'Cosmetics',
            'slug' => 'cosmetics'
        ]);
    }
}
