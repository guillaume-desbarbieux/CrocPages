<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller

{
    function index(): View
    {   
        //$products = DB::select('select * from products');
        $products = product::get();
        return view('catalog', compact('products'));
    }
}
