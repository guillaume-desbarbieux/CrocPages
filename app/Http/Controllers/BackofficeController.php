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

        public function save(Request $request)
    {
        $product = new Product($request->all());
        $product->save();
        return redirect(route('backoffice.products.index'));
    }
    public function update(Request $request, $id)
    {   
        $success = Product::find($id)->update($request->all());

        if ($success) {
            return view('backoffice.edit-success', compact('id'));
        } else {
            return view('backoffice.edit-failure', compact('id'));
        }
    }
}
