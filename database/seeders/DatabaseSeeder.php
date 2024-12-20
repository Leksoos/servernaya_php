<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::factory(10)->has(Comment::factory(3))->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('123456'),
            'role' => 'moderator'
        ]);
    }
}
