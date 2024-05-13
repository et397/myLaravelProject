<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //使用DB facade
        DB::table('posts')->DB::insert
        ([
            'title' => 'Test Post',
            'content' => 'This is a test post.',
        ]);

        //用模型工廠
        \App\Models\Entities\Post::factory(10)->create();

        //在DatabaseSeeder中調用其他Seeder
        // $this->call([
        //     PostSeeder::class,
        // ]);

        //阻止調用其他Seeder
        // $this->call([
        //     postSeeder::class,
        // ]);

        
    }
}
