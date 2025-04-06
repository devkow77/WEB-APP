<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::truncate();

        Trip::insert([
            [
                'name' => 'Bieszczady', 'continent' => 'Europa', 'period' => 3,
                'description' => 'opis wycieczki', 'price' => 50.25, 'img' => "storage/img/colorado.jpg",
                'country_id' => 1 
            ],
            [
                'name' => 'Alaska', 'continent' => 'Europa', 'period' => 2,
                'description' => 'opis wycieczki 2', 'price' => 100.99, 'img' => "storage/img/alaska.jpg",
                'country_id' => 2 
            ],
            [
                'name' => 'Alpy', 'continent' => 'Europa', 'period' => 6,
                'description' => 'opis wycieczki 3', 'price' => 555.23, 'img' => "storage/img/alps.jpg",
                'country_id' => 3 
            ],
               [
                'name' => 'Everest', 'continent' => 'Europa', 'period' => 2,
                'description' => 'opis wycieczki 4', 'price' => 12.64, 'img' => "storage/img/everest.jpg",
                'country_id' => 4 
            ],
               [
                'name' => 'Sudety', 'continent' => 'Europa', 'period' => 5,
                'description' => 'opis wycieczki 5', 'price' => 23.33, 'img' => "storage/img/sudety.jpg",
                'country_id' => 5 
            ],
        ]);
    }
}
