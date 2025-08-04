<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =  Product::with('tags')->get();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(UpdateProductRequest $request)
    {

        $product = Product::create([
            'title' => $request['title'],
            'author' => $request['author'],
            'description' => $request['description'],
            'img_url' => $request['img_url'],
            'price' => $request['price'],
            'stock' => $request['stock'],
        ]);

        if (!empty($request['tags'])) {
            $product->tags()->sync($request['tags']);
        }

        return $this->show($product->id);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'string|max:255',
            'author' => 'string|max:255',
            'img_url' => 'url',
            'price' => 'numeric|min:0',
            'stock' => 'integer|min:0',
            'tags' => 'array',
            'tags.*' => 'integer|exists:tags,id'
        ]);

        $product->update($validated);

        if (isset($validated['tags'])) {
            $product->tags()->sync($validated['tags']);
        }

        return $this->show($id);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('tags')->find($id);
        if (!$product) {
            return response()->json(['error' => 'Produit non trouvé'], 404);
        }
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $isDeleted = false;
        
        if ($product) {
            $isDeleted = $product->delete();
        }


        if ($isDeleted) {
            $alert = [
                "type" => "success",
                "content" => "Le produit est supprimé!"
            ];
        } else {
            $alert = [
                "type" => "failure",
                "content" => "Il est plus coriace que prévu"
            ];
        }
        return  $alert;
    }
}
