<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            $errors = [];
        
            if (!$request->input('email')) {
                $errors['email'] = 'Email is required';
            } elseif (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email Tidak Ditemukan';
            } else {
                // jika email salah
                $errors['password'] = 'Password yang Anda masukkan salah.';
            }
        
            if (!$request->input('password')) {
                $errors['password'] = 'Password is required';
            } elseif (strlen($request->input('password')) < 8) {
                $errors['password'] = 'Password Yang Dimasukan Salah';
            } else {
                // jika kata sandi
                $errors['email'] = 'Email Tidak Ditemukan';
            }
        
            return back()->withErrors($errors);
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
}