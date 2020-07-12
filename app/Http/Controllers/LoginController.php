<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // return response(['user'=>Auth::user()]);

        if (!Auth::attempt($login)) {
            return response()->json(['error' => 'Invalid Credentials.'], 401);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response(['user'=>Auth::user(),'access_token'=>$accessToken]);
    }
}
