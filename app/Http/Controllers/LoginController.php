<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in using the provided credentials
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            // Regenerate the session to prevent session fixation
            $request->session()->regenerate();

            return to_route('welcome')->with('successLogin', 'Vous êtes bien connecté');
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'Email or password incorrect',
        ])->onlyInput('email');
    }


    public function logout()
    {
        Auth::logout();
        return to_route('welcome');
    }
}
