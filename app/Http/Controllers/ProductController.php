<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = DB::select('SELECT * FROM products');
        return view('catalog', ['products' => $products]);
    }

    public function show($id): View
    {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);


        return view('product-details', ['product' => $product[0]]);
    }
}
