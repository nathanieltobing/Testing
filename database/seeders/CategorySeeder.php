<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Action'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Romance'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Comedy'
        ]);
    }
}
