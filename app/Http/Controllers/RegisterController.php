<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'level' => 'nullabel',
            'name' => 'required | max:100',
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'email' => 'required | email | unique:users',
            'password' => 'required | min:5 | max:15'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration success! Please Login!');
    }

}
