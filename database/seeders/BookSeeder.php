<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => 1,
            'publisher_id' => 1,
            'title' => 'Harry Potter and The Goblet of Fire',
            'author' => 'J. K. Rowling',
            'year' => 2000,
            'synopsis' => 'Harry Potter bangun dari mimpi buruknya, di mana ia menyaksikan seorang pria bernama Frank Bryce terbunuh setelah melihat Lord Voldemort bersekongkol dengan Peter Pettigrew. Setelah dari itu, Harry bersama dengan Ron, dan Hermione menghadiri pertandingan Piala Dunia Quidditch antara Irlandia dan Bulgaria.',
            'image' => 'storage/images/book1.jpg'
        ]);

        

        DB::table('books')->insert([
            'id' => 2,
            'publisher_id' => 1,
            'title' => 'Harry Potter and The Half-Blood Prince',
            'author' => 'J. K. Rowling',
            'year' => 2005,
            'synopsis' => 'Lord Voldemort kali ini telah melebarkan cengkeramannya pada dunia sihir Hogwarts ke dunia Muggle. Sementara itu, para Pelahap Maut alias Death Eaters menculik pembuat tongkat sihir, Garrick Ollivander, dan menghancurkan tokonya, serta merubuhkan Jembatan Milenium di Kota London. Voldemort kemudian memilih Draco Malfoy untuk menjalankan misi rahasia di Hogwarts.',
            'image' => 'storage/images/book2.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 3,
            'publisher_id' => 2,
            'title' => 'It Ends with Us',
            'author' => 'Colleen Hoover',
            'year' => 2016,
            'synopsis' => 'Novel ini berkisah tentang rasa sayang dan cinta antara seorang wanita bernama Lily dan seorang lelaki yang belum lama dikenalnya, yaitu Ryle.
             Lily dan Ryle saling mencintai dan membangun kehidupan keluarga kecil mereka. Inti kisah yang diceritakan pada novel ini, yaitu kerinduan untuk membangun sebuah keluarga yang damai dan harmonis.',
            'image' => 'storage/images/book3.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 4,
            'publisher_id' => 3,
            'title' => 'Red, White & Royal Blue',
            'author' => 'Casey McQuiston',
            'year' => 2019,
            'synopsis' => 'Novel ini berkisah tentang rasa sayang dan cinta antara seorang wanita bernama Lily dan seorang lelaki yang belum lama dikenalnya, yaitu Ryle.
             Lily dan Ryle saling mencintai dan membangun kehidupan keluarga kecil mereka. Inti kisah yang diceritakan pada novel ini, yaitu kerinduan untuk membangun sebuah keluarga yang damai dan harmonis.',
            'image' => 'storage/images/book4.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 5,
            'publisher_id' => 4,
            'title' => 'Manusia Setengah Salmon',
            'author' => 'Raditya Dika',
            'year' => 2011,
            'synopsis' => 'Manusia Setengah Salmon mengisahkan seroang pria bernama Dika (Raditya Dika), seorang penulis yang sedang berusaha move on dari mantan kekasihnya. Dika harus menghadapi berbagai masalah mulai dari dirinya yang belum bisa melupakan sang mantan hingga orang tuanya yang ingin segera pindah rumah',
            'image' => 'storage/images/book5.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 6,
            'publisher_id' => 4,
            'title' => 'Kambing Jantan: Sebuah Komik Pelajar Bodoh ',
            'author' => 'Raditya Dika',
            'year' => 2005,
            'synopsis' => 'Sebuah Komik Pelajar Bodoh adalah kumpulan cerita seorang pelajar Batak bernama Raditya Dika (dipanggil Dika, Radith, atau Kambing) ketika sedang menimba ilmu di Adelaide, Australia..',
            'image' => 'storage/images/book6.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 7,
            'publisher_id' => 4,
            'title' => 'Marmut Merah Jambu ',
            'author' => 'Raditya Dika',
            'year' => 2010,
            'synopsis' => 'Marmut Merah Jambu ini berkisah tentang Dika yang menceritakan kisah cinta pertamanya ketika masa SMA, dengan perempuan bernama Ina Mangunkusumo. Selain itu dikisahkan pula saat Dika dan temannya Bertus yang membentuk grup detektif untuk memecahkan masalah teman-temannya, juga persahabatannya dengan Cindy',
            'image' => 'storage/images/book7.jpg'

        ]);

        DB::table('books')->insert([
            'id' => 8,
            'publisher_id' => 1,
            'title' => 'Harry Potter and the Order of the Phoenix',
            'author' => 'J.K. Rowling',
            'year' => 2003,
            'synopsis' => 'The Order of the Phoenix merupakan sebuah organisasi rahasia dalam seri buku fantasi fiksi Harry Potter, yang ditulis oleh J.K Rowling. Organisasi tersebut didirikan oleh Albus Dumbledore untuk melawan Lord Voldemort dan para pengikutnya, Pelahap Maut alias Death Eaters.',
            'image' => 'storage/images/book8.jpg'

        ]);




    }
}
