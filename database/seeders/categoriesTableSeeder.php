<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_id' => 5,
            'category_name' => zxcvbnbcvxzax,
            
        ]);
          DB::table('categories')->insert([
            'category_id' => 6,
            'category_name' => text,
            
        ]);
    }
}
