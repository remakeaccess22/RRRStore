<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the login form (GET request)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission (POST request)
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('Email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->Password)) {
            // Password is correct, proceed with login
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        // If the credentials are incorrect, return with an error message
        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Redirect to the login page
        return redirect()->route('login');
    }
}
