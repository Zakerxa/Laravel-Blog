<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $FromData = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6']
        ]);
        $user = User::create($FromData);
        auth()->login($user);
        return redirect('/')->with('success', 'Welcome Dear ' . $user->name);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function post_login()
    {
        $loginData = request()->validate(
            [
                'email' => ['required', 'email', 'max:255', Rule::exists('users', 'email')],
                'password' => ['required', 'min:8', 'max:255']
            ], // Overwrite error message
            ['email.required' => 'Email is required']
        );

        if(auth()->attempt($loginData)){
           return redirect('/')->with('success','Welcome Back');
        }else{
            return redirect()->back()->withErrors([
                'login_error' => 'Email & Password are incorrect . . .'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye');
    }
}
