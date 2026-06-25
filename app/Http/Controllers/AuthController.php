<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username) || empty($password)) {
            return redirect()->route('login')->with('error', 'Please enter your username and password.');
        }

        session(['auth_user' => $username]);

        return redirect()->route('departments.index');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $username = $request->input('username');

        session(['auth_user' => $username]);

        return redirect()->route('departments.index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('auth_user');

        return redirect()->route('login');
    }
}
