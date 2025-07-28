<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Ravage',
                'author' => 'René Barjavel',
                'price' => 10,
                'img_url' => 'https://m.media-amazon.com/images/I/81--VV+ZXrL.jpg',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'price' => 12,
                'img_url' => 'https://static.fnac-static.com/multimedia/PE/Images/FR/NR/10/35/01/79120/1507-1/tsp20250103092736/1984.jpg',
            ],            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'price' => 11,
                'img_url' => 'https://m.media-amazon.com/images/I/71OFqSRFDgL.jpg',
            ],
            [
                'title' => 'Le Meilleur des mondes',
                'author' => 'Aldous Huxley',
                'price' => 13,
                'img_url' => 'https://m.media-amazon.com/images/I/61v7bRPlQPL._UF1000,1000_QL80_.jpg',
            ],
            [
                'title' => 'La Nuit des temps',
                'author' => 'Barjavel',
                'price' => 14,
                'img_url' => 'https://m.media-amazon.com/images/I/51agfIYIv3L._UF1000,1000_QL80_.jpg',
            ],
            [
                'title' => 'Fondation',
                'author' => 'Isaac Asimov',
                'price' => 15,
                'img_url' => 'https://www.gallimard.fr/system/files/styles/medium/private/migrations/ouvrages/couvertures/A36053.jpg.webp?itok=F4kBRbnD',
            ],
            [
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'price' => 16,
                'img_url' => 'https://m.media-amazon.com/images/I/61HLU-TCZ8L.jpg',
            ],
            [
                'title' => 'Les Robots',
                'author' => 'Isaac Asimov',
                'price' => 10,
                'img_url' => 'https://m.media-amazon.com/images/I/51DcyR3DuwL._UF1000,1000_QL80_.jpg',
            ],
            [
                'title' => 'Ubik',
                'author' => 'Philip K. Dick',
                'price' => 9,
                'img_url' => 'https://m.media-amazon.com/images/I/61N9jehRGHL._UF1000,1000_QL80_.jpg',
            ],
            [
                'title' => 'Solaris',
                'author' => 'Stanislas Lem',
                'price' => 12,
                'img_url' => 'https://m.media-amazon.com/images/I/61+kEy9J6eL._UF1000,1000_QL80_.jpg',
            ],
        ]; 
        
        foreach ($books as $book) {
            DB::table('products')->insert($book);
        }
    }
}
