<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    public function show() {}

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
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($validated)) {
            return response()->json([
                'message' => 'Connexion echouee',
                'data' => 'Error'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        $user->tokens()->delete();
        $token = $user->createToken('api_token', [$user->isAdmin() ? 'admin ' : 'user'], now()->addHours(2)->addMinutes(15))->plainTextToken;

        return response()->json([
            'message' => 'Connexion reussie, token cree',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 200);
    }
}
