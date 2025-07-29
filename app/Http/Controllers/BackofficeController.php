<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('backoffice.index', compact('products'));
    }

    function show($id, $isUpdate = null)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact('product'), ['isUpdate' => $isUpdate]);
    }
    function showEdit($id)
    {
        $tags = Tag::all();
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product', 'tags'));
    }
    function update(UpdateProductRequest $request, $id)
    {
        $isUpdate = Product::findOrFail($id)->update($request->validated());

        return redirect()->route('backoffice.product', ['id' => $id, 'isUpdate' => $isUpdate]);
    }
    function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('backoffice');
    }
    function create(){
        $tags = Tag::all();
        return view('backoffice.create', ['tags' => $tags]);
    }
    function save(UpdateProductRequest $request){

        Product::create($request->validated());

        return redirect()->route('backoffice');
    }
}
