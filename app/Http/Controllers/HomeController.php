<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(): View
    {
        // Récupérer les produits de la BDD avec une Raw SQL Query
        $products = DB::select('SELECT * FROM products');

        // Passer $products à la vue 'homepage'
        return view('homepage', compact('products'));
    }
}
