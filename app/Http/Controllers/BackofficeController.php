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

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.edit', compact('product'));
    }
    public function testnew()
    {
        dd("je suis là");
        return view('backoffice.new');
    }
}
