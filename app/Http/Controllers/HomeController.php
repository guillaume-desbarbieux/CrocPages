<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class HomeController extends Controller
{
    function index(): View
    {
        //$articles = DB::select('select * from products where category_id=1');

        $products = product::where('category_id', "=",2 )->get();


        return view('homepage', compact('products'));
    }
}
