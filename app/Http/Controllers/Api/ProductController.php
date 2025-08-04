<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('tags')->get();

        $products->each(function ($product) {
            $product->tags->each->makeHidden(['pivot', 'created_at', 'updated_at']);
        });

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'img_url' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        
        $product = Product::create($validated);
        
        return response()->json([
            'message' => 'Produit cree avec succes',
            'data' => $product
        ], 201);
    }
}

