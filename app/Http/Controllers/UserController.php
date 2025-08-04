<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
        public function listToken()
    {
        $tokens = Auth::user()->tokens;

        $alert = [
            'type' => "success",
            'title' => "Vos tokens déjà existants",
            'content' => $tokens
        ];
        return Redirect::route('profile.edit')->with('alert', $alert);
    }

    public function createToken()
    {
        $user = Auth::user();


        if ($user->isAdmin()) {
            $abilities = "admin";
        } else {
            $abilities = "customer";
        }

        $token = $user->createToken('api-token', [$abilities])->plainTextToken;

        $alert = [
            'type' => "success",
            'title' => "Voici votre nouveau token",
            'content' => $token
        ];
        return Redirect::route('profile.edit')->with('alert', $alert);
    }

    public function deleteTokens() {
        Auth::user()->tokens()->delete();
         $alert = [
            'type' => "danger",
            'title' => "Vos tokens sont supprimés",
            'content' => "Tout est propre !"
        ];
        return Redirect::route('profile.edit')->with('alert', $alert);
    }
}
