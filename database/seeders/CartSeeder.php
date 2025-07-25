<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            'user_id' => rand(1, 1),
            'product_id' => rand(1, 10),
            'price' => rand(1, 50),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
