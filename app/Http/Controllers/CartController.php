<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    function index(): View{

        // $cart = DB::select('select * from cart');
        // @dump($cart);

        $products = Product::all();

        return view('cart.cart-show', [
            'productsList' => $products,
        ]);
    }
}
