<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(): View{
        $users = DB::select('select * from users');
        @dump($users);
        $cart = DB::select('select * from cart');
        @dump($cart);

        // DB::table('cart')->insertOrIgnore([
        //     'user_id' => rand(1, 2), 
        //     'product' => 'Sample Product',
        //     'quantity' => rand(1, 5),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        return view('cart.cart-show', [
            'cart' => $cart,
        ]);
    }
}
