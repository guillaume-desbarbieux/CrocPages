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
    private function getCartUser(int $userId): Cart{
        $user = User::find($userId);
        $cart = $user->cart()->where('is_paid', false)->first();
        return $cart;
    }
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
        $cart = $this->getCartUser(1);

        if($cart){
            foreach($cart->items as $item){
                $itemWithQuantity = $item->product;
                $itemWithQuantity['quantity'] = $item->quantity;
                array_push($productsList, $itemWithQuantity);
            }
        }

        return view('cart.cart-show', [
            'productsList' => $productsList,
        ]);
    }
    function updateQuantity(Request $request, $productId){
        $request->validate([
            'quantity' => 'required|integer|min:1|max:99',
        ]);

        $cart = $this->getCartUser(1);

        $cart->items()->where('product_id', $productId)->update([
            'quantity' => $request->input('quantity')
        ]);
        
        return redirect()->route('cart');
    }
}
