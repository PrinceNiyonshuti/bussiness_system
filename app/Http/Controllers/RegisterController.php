<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        # create user
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);

        // login the created user
        auth()->login($user);

        return redirect('/dashboard')->with('success', 'Your account has been created');
    }
}
