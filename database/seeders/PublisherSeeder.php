<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'id' => 1,
            'name' => 'Bloomsbury',
            'address' => '1385 Broadway, New York, NY',
            'phone' => '0813194212',
            'email' => 'contact@bloomsbury.com',
            'image' => 'storage/images/publisher1.jpg'
        ]);

        DB::table('publishers')->insert([
            'id' => 2,
            'name' => 'Atria Books',
            'address' => 'Simon & Schuster Building New York City',
            'phone' => '0824213523',
            'email' => 'AtriaPublicity@SimonandSchuster.com',
            'image' => 'storage/images/publisher2.jpg'
        ]);

        DB::table('publishers')->insert([
            'id' => 3,
            'name' => 'St Martins Griffin',
            'address' => 'Equitable Building 120 Broadway New York, NY 10271 U.S.',
            'phone' => '0813241322',
            'email' => 'stMartins@Griffin.com',
            'image' => 'storage/images/publisher3.png'
        ]);

        DB::table('publishers')->insert([
            'id' => 4,
            'name' => 'GAGAS MEDIA',
            'address' => 'Jl. H. Montong No.57, RT.6/RW.3, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630',
            'phone' => '081377832',
            'email' => 'redaksi@gagasmedia.net',
            'image' => 'storage/images/publisher4.jpg'
        ]);
    }
}
