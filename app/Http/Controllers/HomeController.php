<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    function index(): View{
        $articles = include base_path('data/articles.php');
        return view('homepage', compact('articles'));
    }
}
