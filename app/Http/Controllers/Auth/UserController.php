<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Auth\Events\Registered;

class userController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
            'password' => 'required|string|min:8',
        ]);

        do {
            $userID = rand(10000, 99999);
        } while (User::where('userID', $userID)->exists());

        $user = User::create([
            'userID' => $userID,
            'FirstName' => $request->input('first_name'),  // Ensure correct field names
            'LastName' => $request->input('last_name'),    // Ensure correct field names
            'Email' => $request->input('email'),
            'Password' => Hash::make($request->input('password')),
            'RoleID' => 3,  // Default role
        ]);


        event(new Registered($user));

        return redirect(route('login'))->with('status', 'Registration successful! Please log in.');
    }
}
