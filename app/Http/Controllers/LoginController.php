<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('sign_in');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with(
            'loginError' , 'login failed'
        );
    }

    // public function authenticated(Request $request, $user)
    // {
    //     if ($user->hasRole('admin')) {
    //         return redirect()->route('admin.page');
    //     }

    //     return redirect()->route('user.page');
    // }
}
