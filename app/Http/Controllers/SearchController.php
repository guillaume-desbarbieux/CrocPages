<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $input = $request->input('query');
        $products = Product::where('title', 'like', "%$input%")->orWhere('author', 'like', "%$input%")
        ->orWhereHas('tags', function ($tagQuery) use ($input) {
            $tagQuery->where('name', 'like', "%$input%");})->get();

            // https://laravel.com/docs/12.x/eloquent-relationships#querying-relationship-existence Lien de la doc sur le wherehas :)
        return view('search.search', compact('products', 'input'));
    }
}
