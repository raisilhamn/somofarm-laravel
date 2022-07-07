<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sign_up');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validated['password'] = bcrypt($validated['password']);

        
        User::create($validated);
        // $request-> assignRole('user');

        $request->session()->flash('success','Registrasi berhasil, silahkan login');

        return redirect('/login');
    }
}
