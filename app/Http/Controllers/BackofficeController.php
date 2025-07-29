<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProductRequest;
use App\Models\Product;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function home()
    {
        return view('backoffice.home');
    }

    public function index()
    {
        $products = Product::all();
        return view('backoffice.index', compact('products'));
    }

    public function show($id, $success = null)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact(['product', 'success']));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product'));
    }
    public function create()
    {
        return view('backoffice.create');
    }

    public function save(EditProductRequest $request)
    {
        try {
            $validated = $request->validated();
            $product = new Product($validated);
            $product->save();
            return redirect()->route('backoffice.products.show', $product);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Une erreur est survenue pour la création du produit :' . $e->getMessage());
        }
    }
    public function update(EditProductRequest $request, $id)
    {
        $success = Product::find($id)->update($request->validated());

        if ($success) {
            return view('backoffice.edit-success', compact('id'));
        } else {
            return view('backoffice.edit-failure', compact('id'));
        }
    }
}
