<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Science-Fiction'],
            ['name' => 'Policier'],
            ['name' => 'Documentaire']
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
