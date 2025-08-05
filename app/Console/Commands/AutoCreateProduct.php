<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Tag;
use Faker\Factory as Faker;

class AutoCreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-create-product';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Créer automatiquement un produit fictif chaque jour';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $faker = Faker::create();


        $product = Product::create([
            'title' => $faker->text(30),
            'author' => $faker->name(),
            'description' => $faker->paragraph(),
            'img_url' => 'https://lorempicture.point-sys.com/' . rand(200, 400) . '/' . rand(200, 400),
            'price' => rand(5, 50),
            'stock' => rand(1, 20)
        ]);

        // Associer 1 à 3 tags aléatoires parmi les existants
        $tagIds = Tag::pluck('id')->toArray();
        if (!empty($tagIds)) {
            $randomTags = collect($tagIds)->random(rand(1, min(3, count($tagIds))))->all();
            $product->tags()->sync($randomTags);
        }

        $this->info("Produit créé avec ID {$product->id}");

        return Command::SUCCESS;
    }
}
