<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)
            ->has(
                Post::factory()
                    ->count(3)
                    ->has(
                        Comment::factory(5)
                    )
            )
            ->create();
    }
}
