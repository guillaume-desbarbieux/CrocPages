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

    function show($id, $action = null)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact('product'), ['action' => $action]);
    }
    function showEdit($id)
    {
        $tags = Tag::all();
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product', 'tags'));
    }
    function update(UpdateProductRequest $request, $id)
    {
        $action = null;
        $isUpdate = Product::findOrFail($id)->update($request->validated());
        
        $listErrors = Product::findOrFail($id)->isSame($request);
       
        
        if($isUpdate === true && $listErrors === []){
            $action = "updated";
        }else{
            $action = "unUpdated";
        }

        return redirect()->route('backoffice.product', ['id' => $id, 'action' => $action]);
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

        $action = null;
        $newProduct = Product::create($request->validated());
        if($newProduct){
            $action = "created";
        }

        return redirect()->route('backoffice.product', ['id' => $newProduct->id, 'action' => $action]);
    }
}
