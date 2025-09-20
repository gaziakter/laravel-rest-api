<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]); // Validate input data     

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]); // Create user

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    //Login user
    public function login(Request $request)
    {
        return "Login endpoint";
    }
}
