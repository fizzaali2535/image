<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => hello,
            'content' => zxcvbnbcvxzax,
            
        ]);
          DB::table('posts')->insert([
            'title' => example,
            'content' => text,
            
        ]);
    }
}
