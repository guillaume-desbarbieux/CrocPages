<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice.index');
    }

    public function listProducts()
    {
        $products = Product::all();
        return view('backoffice.product', compact('products'));
    }
}
