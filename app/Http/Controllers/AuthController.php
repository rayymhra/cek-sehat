<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Log the user in
            $user = Auth::user(); 
            Auth::login($user); 
    
            // Redirect to the desired page
            return redirect()->intended('/dashboard'); // Or any other intended route
        } else {
            // Handle authentication failure
            return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
    }

    public function backendDashboard()
    {
        // Your logic to handle the backend dashboard goes here
        // Example:
        return view('backend.dashboard');
    }
}