<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BackofficeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backoffice.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact ('product'));
    }
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'stock' => 'required|numeric|min:0'
        ]);
        $product->update($validated);
        return redirect()->route('admin.catalog.edit', $product->id)
        ->with('success', 'Produit mis à jour avec succès !');
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.catalog.show')
        ->with('success', 'Produit supprimé avec succès.');
    }
    public function addmenu()
    {
        return view('backoffice.add');
    }
    public function add(Request $request)
    {
        $request->validate([
            'img_url' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'stock' => 'required|numeric|min:0',
        ]);

        

        Product::create([
            'img_url' => $request->img_url,
            'title' => $request->title,
            'author' => $request->author,
            'price' =>  $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
        ]);
        return redirect()->route('admin.catalog.add')->with('success', 'Produit ajouté avec succès.');
    }
}
