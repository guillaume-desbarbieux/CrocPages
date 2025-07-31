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
    private function getCartUser(int $userId): Cart
    {
    private function getCartUser(int $userId): Cart
    {
        $user = User::find($userId);
        $cart = $user->cart()->where('is_paid', false)->first();
        return $cart;
    }
    private function getCart()
    {
        $cart = User::find(1)
            ->cart()->where('is_paid', false)->first()
            ->items()->with('product')
            ->get()->sortBy(function ($item) {
                return ($item->product->price * $item->quantity);
            }, 0, false);
    private function getCart()
    {
        $cart = User::find(1)
            ->cart()->where('is_paid', false)->first()
            ->items()->with('product')
            ->get()->sortBy(function ($item) {
                return ($item->product->price * $item->quantity);
            }, 0, false);
        return $cart;
    }
    function index(): View
    {
    function index(): View
    {

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
        $cart = $this->getCart();

        abort_if(!$cart, 404);



        foreach ($cart as $item) {
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
    function updateQuantity(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . Product::find($productId)->stock,
        ]);
        $cart = $this->getCartUser(1);

        $cart->items()->where('product_id', $productId)->update([
            'quantity' => $request->input('quantity')
        ]);


        return redirect()->route('cart');
    }
    function removeItem($productId)
    {
    function removeItem($productId)
    {
        $cart = $this->getCartUser(1);

        $cart->items()->where('product_id', $productId)->delete();

        return redirect()->route('cart');
    }

    function addItem($productId)
    {
        $cart = Cart::first();
        $isAdded = $cart->addItem($productId);
        return back()->with('isAdded',$isAdded);
    }
}
