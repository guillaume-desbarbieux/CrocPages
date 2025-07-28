<?php

namespace App\Http\Controllers;
use App\Models\Product;

class CatalogController extends Controller

{
    public function index()
    {
        $products = Product::all();
        return view('catalog', compact('products'));
    }


 public function indexByTitle()
    {
        $products = Product::orderBy('title', 'asc')->get();
        return view('catalog', compact('products'));
    }

    public function indexByPrice()
    {
        $products = Product::orderBy('price', 'asc')->get();
        return view('catalog', compact('products'));
    }
}
