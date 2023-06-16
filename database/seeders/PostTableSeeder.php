<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var = [
            ['id' => 1, 'title' => 'post one', 'description' => 'd1...', 'status' => '1'],
            ['id' => 2, 'title' => 'post two', 'description' => 'd2...', 'status' => '0'],
            ['id' => 3, 'title' => 'post three', 'description' => 'd3...', 'status' => '0'],
        ];
        Post::insert($var);

    }
}