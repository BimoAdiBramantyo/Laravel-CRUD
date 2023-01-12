<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Publisher;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Book::factory(10)->create();
        Publisher::factory(10)->create();
    }
}
