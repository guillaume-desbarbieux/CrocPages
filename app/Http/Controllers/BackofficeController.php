<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('backoffice.index', compact('products'));
    }

    function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact('product'));
    }
    function edit($id)
    {
        
    }
}
