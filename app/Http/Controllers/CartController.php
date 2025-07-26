<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;

class CartController extends Controller
{
    function index(): View{

        // $cart = DB::select('select * from cart');
        // @dump($cart);
        // $cart = Cart::where('user_id', 1)->first()->id;
        // @dump($cart);
        // $cart = Cart::all();
        // @dump($cart);

        //$products = Product::all();

        // $cartOfUser = Cart::where('user_id', 2)->where('is_paid', false)->first()->id;
        // $products = CartItem::where('cart_id', $cartOfUser);
        // @dump($products);

        $productsList = [];
        $user = User::find(2);
        $cart = $user->cart()->where('is_paid', false)->first();
        //@dump($cart);

        if($cart){
            foreach($cart->items as $item){
                $itemWithQuantity = $item->product;
                $itemWithQuantity['quantity'] = $item->quantity;
                array_push($productsList, $itemWithQuantity);
            }
        }
        //@dump($productsList);

        return view('cart.cart-show', [
            'productsList' => $productsList,
        ]);
    }
}
