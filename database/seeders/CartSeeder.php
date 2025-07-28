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
            'user_id' => 1,
            'price' => rand(1, 50),
            'created_at' => now(),
            'updated_at' => now(),
            'is_paid' => false,
        ]);
        DB::table('carts')->insert([
            'user_id' => 2,
            'price' => rand(1, 50),
            'created_at' => now(),
            'updated_at' => now(),
            'is_paid' => false,
        ]);
        DB::table('carts')->insert([
            'user_id' => 1,
            'price' => rand(1, 50),
            'created_at' => now(),
            'updated_at' => now(),
            'is_paid' => true,
        ]);
    }
}
