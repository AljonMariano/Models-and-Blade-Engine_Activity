<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Book;
use Database\Factories\BookFactory;
use Faker\Factory as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    

        
        Book::factory()->count(20)->create();
    }
}
