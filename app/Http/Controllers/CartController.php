<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private function getCartUser(): Cart
    {
        $user = Auth::user();
        $cart = $user->cart()->where('is_paid', false)->first();
        return $cart;
    }
    private function getCart()
    {

        $user = User::find(Auth::id());
        if($user == null){
            return view('auth.login');
        }

        return User::find(Auth::id())->cart()->where('is_paid','=', false)->first()->items()->get();
    }
    function index(): View
    {
        $productsList = [];
        $cart = $this->getCart();
        
        abort_if(!$cart, 404);



        foreach ($cart as $item) {
            $itemWithQuantity = $item->product;
            $itemWithQuantity['quantity'] = $item->quantity;
            array_push($productsList, $itemWithQuantity);
        }



        return view('cart.cart-show', [
            'productsList' => $productsList,
        ]);
    }
    function updateQuantity(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . Product::find($productId)->stock,
        ]);
        $cart = $this->getCartUser(Auth::id());

        $cart->items()->where('product_id', $productId)->update([
            'quantity' => $request->input('quantity')
        ]);


        return redirect()->route('cart');
    }
    function removeItem($productId)
    {
        $cart = $this->getCartUser(Auth::id());

        $cart->items()->where('product_id', $productId)->delete();

        return redirect()->route('cart');
    }

    function addItem($productId)
    {
        $cart =  Auth::user()->getCart();
        $isAdded = $cart->addItem($productId);
        return back()->with('isAdded', $isAdded);
    }
}
