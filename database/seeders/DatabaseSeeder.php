<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            PermissionSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            PermissionUserSeeder::class,
            CommentSeeder::class,
            PostTagSeeder::class,
            PostSeeder::class,
        ]);
    }
}
