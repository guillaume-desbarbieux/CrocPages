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
        $products = Product::where('title', 'like', "%$input%")->orWhere('author', 'like', "%$input%")->get();
        return view('search.search', compact('products', 'input'));
    }
}
