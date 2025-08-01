<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Tag;
use App\Models\TagProduct;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('backoffice.index', compact('products'));
    }



    function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact('product'));
    }



    function showEdit($id)
    {
        $tags = Tag::all();
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product', 'tags'));
    }



    function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->except('tag_id'));
        $product->tags()->sync($request->input('tag_id', []));
        $isUpdate = true;

        $listErrors = Product::findOrFail($id)->isSame($request);


        if ($isUpdate === true && $listErrors === []) {

            $alert = [
                'type' => "success",
                'title' => "Félicitations",
                'content' => "Le produit est mis à jour!"
            ];
        } else {
            $alert = [
                'type' => "danger",
                'title' => "Raté",
                'content' => "Il est plus têtu que prévu"
            ];
        }

        return redirect()->route('backoffice.product.show', ['id'=>$id])->with('alert', $alert);
    }



    function delete($id)
    {
        $isDeleted = Product::findOrFail($id)->delete();

        if ($isDeleted) {
            $alert = [
                'type' => "success",
                'title' => "Félicitations",
                'content' => "Le produit est supprimé!"
            ];
        } else {
            $alert = [
                'type' => "danger",
                'title' => "Raté",
                'content' => "Il est plus coriace que prévu"
            ];
        }
        return redirect()->route('backoffice.product.index')->with('alert', $alert);
    }



    function create()
    {
        $tags = Tag::all();
        return view('backoffice.create', ['tags' => $tags]);
    }



    function save(UpdateProductRequest $request)
    {
        $tagIds = $request->input('tag_id', []);
        if ($request->filled('new_tag')) {
            $newTag = Tag::firstOrCreate(['name' => $request->input('new_tag')]);
            $tagIds[] = $newTag->id;
        }
        $newProduct = Product::create($request->except('tag_id', 'new_tag'));
        $newProduct->tags()->sync($tagIds);

        if ($newProduct) {
            $alert = [
                'type' => "success",
                'title' => "Félicitations",
                'content' => "Le produit est créé!"
            ];
        } else {
            $alert = [
                'type' => "danger",
                'title' => "Raté",
                'content' => "Création échouée"
            ];
        }

        return redirect()->route('backoffice.product.show', ['id' => $newProduct->id])->with('alert', $alert);
    }
}
