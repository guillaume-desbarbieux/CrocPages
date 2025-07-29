<?php

namespace App\Http\Controllers;

use App\Models\Product;

class BackProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.detailsproduct', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product'));
    }
}
