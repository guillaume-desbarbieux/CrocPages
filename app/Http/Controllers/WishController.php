<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\User;
use Illuminate\Http\Request;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function add($product_id)
    {
        $user_id = User::first()->id;
        Wish::create(['product_id' => $product_id, 'user_id' => $user_id]);
        return back()->with(['wishAdded', $product_id]);
    }

    public function remove($product_id)
    {
        $user_id = User::first()->id;
        $wish =  Wish::where('product_id', "=", $product_id)->where('user_id', '=', $user_id)->first();
        $wish->deleteOrFail();
        return back()->with(['wishRemoved', $product_id]);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wish $wish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wish $wish)
    {
        //
    }
}
