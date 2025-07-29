<?php

namespace App\Http\Controllers;

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

    public function show($id, $success=null)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact(['product', 'success']));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product'));
    }
    public function new()
    {
        return view('backoffice.new');
    }
    public function update(Request $request, $productId)
    {
        $success = Product::find($productId)->update($request->all());

        return redirect(route('backoffice.products.show', ['id' => $productId, 'success' => $success]));
    }
}
