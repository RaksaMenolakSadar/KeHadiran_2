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
            'nama' => 'required | max:100',
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'email' => 'required | email | unique:users',
            'password' => 'required | min:5 | max:15'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        $user->assignRole('user');
        return redirect('/login')->with('success', 'Registration success! Please Login!');
    }

}
