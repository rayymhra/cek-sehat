<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showLoginFormUser()
    {
        return view('auth.login-user');
    }
}
