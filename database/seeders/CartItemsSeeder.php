<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_items')->insert([
            'cart_id' => 1,
            'product_id' => 2,
            'quantity' => 2,
        ]);
        DB::table('cart_items')->insert([
            'cart_id' => 1,
            'product_id' => 3,
            'quantity' => 3,
        ]);
        DB::table('cart_items')->insert([
            'cart_id' => 2,
            'product_id' => 1,
            'quantity' => 1,
        ]);
        DB::table('cart_items')->insert([
            'cart_id' => 2,
            'product_id' => 6,
            'quantity' => 1,
        ]);
    }
}
