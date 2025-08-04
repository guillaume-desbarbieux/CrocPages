<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('tags')->get();
        $tokens = PersonalAccessToken::all();

        $products->each(function ($product) {
            $product->tags->each->makeHidden(['pivot', 'created_at', 'updated_at']);
        });

        return response()->json([$products, $tokens]);
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
    public function show(Request $request)
    {
        $product = Product::findOrFail($request->id);

        return response()->json([
            'message' => 'Le produit',
            'data' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if(!$request->user()->tokenCan('admin')){
            return response()->json([
                'message' => 'Vous n\'avez pas les droits pour modifier un produit',
                'data' => 'Error'
            ]);
        }


        if (isset($request->id)) {
            $product = Product::findOrFail($request->id);
            $product->update($request->except('tag_id'));
            $isUpdate = true;
        }
        
        if ($isUpdate) {
            return response()->json([
                'message' => 'Produit mis a jour avec succes',
                'data' => $product
            ]);
        }else{
            return response()->json([
                'message' => 'Erreur lors de la mise a jour du produit',
                'data' => 'Error'
            ]);
        }
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

        if(!$request->user()->tokenCan('admin')){
            return response()->json([
                'message' => 'Vous n\'avez pas les droits pour créer un produit',
                'data' => 'Error'
            ]);
        }

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Produit cree avec succes',
            'data' => $product
        ], 201);
    }
}
