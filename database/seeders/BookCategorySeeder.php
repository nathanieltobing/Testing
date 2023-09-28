<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([
            'id' => 1,
            'book_id' => 1,
            'category_id' => 1
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 2,
            'book_id' => 1,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 3,
            'book_id' => 2,
            'category_id' => 1
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 4,
            'book_id' => 2,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 5,
            'book_id' => 3,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 6,
            'book_id' => 4,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 7,
            'book_id' => 5,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 8,
            'book_id' => 5,
            'category_id' => 3
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 9,
            'book_id' => 6,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 10,
            'book_id' => 6,
            'category_id' => 3
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 11,
            'book_id' => 7,
            'category_id' => 2
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 12,
            'book_id' => 7,
            'category_id' => 3
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 13,
            'book_id' => 8,
            'category_id' => 1
            
        ]);
        DB::table('book_categories')->insert([
            'id' => 14,
            'book_id' => 8,
            'category_id' => 2
            
        ]);
    }
}
