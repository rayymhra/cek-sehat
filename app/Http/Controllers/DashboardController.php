<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class DashboardController extends Controller
{
    public function dashboard(Request $request): RedirectResponse
    {
        if ($request->session()->exists("user")) {
            return redirect("/todolist");
        } else {
            return redirect("/login");
        }
    }
}
