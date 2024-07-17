<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('password'),
        //     'role' => 'admin'
        // ]);

        // \App\Models\User::factory(10)->create();

        $this->call(
            [
                UsersSeeder::class,
                ProductSeeder::class,
                ProductCommentSeeder::class
            ]
        );
    }
}
