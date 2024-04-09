<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy posts
        for ($i = 1; $i <= 3; $i++) {
            Post::create([
                'title' => 'Post ' . $i,
                'content' => 'This is the content of post ' . $i,
            ]);
        }
    }
}
