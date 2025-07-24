<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Show the product list.
     */
    public function index(): View
    {
        $articles = include base_path('data/articles.php');
        return view('product-list', compact('articles'));
    }

    /**
     * Show the product details.
     */
    public function show(string $id): View
    {
        $articles = include base_path('data/articles.php');
        $article = collect($articles)->firstWhere('id', (int) $id);
        return view('product-details', 
            compact('article'));
    }
}