<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login_ui()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        return view('pages.start_exam');
    }
}
