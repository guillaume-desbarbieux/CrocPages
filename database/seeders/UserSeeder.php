<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            'first_name' => "John",
            'last_name' => "Doe",
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password'),
        ]);
         DB::table('users')->insert([
            'first_name' => "Jane",
            'last_name' => "Doudou",
            'email' => 'jane.doudou@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

