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
        //$articles = DB::select('select * from products where tag_id=1');
        $products = product::orderBy('price', 'asc')
                            ->orderBy('author', 'asc')
                            ->get();


        return view('homepage', compact('products'));
    }
}
