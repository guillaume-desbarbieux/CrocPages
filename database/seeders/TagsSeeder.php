<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Science-Fiction'],
            ['name' => 'Policier'],
            ['name' => 'Documentaire']
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert($tag);
        }
    }
}
