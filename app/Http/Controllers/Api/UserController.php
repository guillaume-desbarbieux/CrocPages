<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function createToken(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Identifiants incorrects'], 401);
        }

        $user = User::where('email', $request->email)->first();


        if ($user->isAdmin()) {
            $abilities = "admin";
        } else {
            $abilities = "customer";
        }

        $token = $user->createToken('api-token', [$abilities])->plainTextToken;

        return response()->json([
            'title' => "votre token est créé",
            'token' => $token,
            'token abilities' => $abilities,
            'user' => $user,
        ]);
    }

    public function listToken(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Identifiants incorrects'], 401);
        }

        $user = User::where('email', $request->email)->first();


        return response()->json([
            'title' => "Voici vos tokens",
            'token' => $user->tokens,
            'user' => $user,
        ]);
    }
}
