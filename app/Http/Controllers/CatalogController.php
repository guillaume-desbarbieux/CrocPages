<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index(): View
    {
        $products = DB::select('SELECT * FROM products');
        return view('catalog', compact('products'));
    }
}
