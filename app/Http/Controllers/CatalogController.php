<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CatalogController extends Controller
{
    function index(): View
    {   
        $articles = include base_path('data/articles.php');
        return view('catalog', compact('articles'));
    }
}
