<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Show the product list.
     */
    public function index(): View
    {
        return view('product-list');
    }

    /**
     * Show the product details.
     */
    public function show(string $id): View
    {
        return view('product-details', [
            'id' => $id]);
    }
}