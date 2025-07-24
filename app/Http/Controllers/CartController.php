<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(): View{
        return view('cart.cart-show');
    }
}
