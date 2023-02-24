<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginpage.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required'
        ]
    );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->roles->first()->name == 'admin')
            {
                return redirect('/dashboard');
            }
            else if(Auth::user()->roles->first()->name == 'guest')
            {
                return redirect('/');
            }
            else if(Auth::user()->roles->first()->name == 'murid')
            {
                return redirect('/');
            }
            else if(Auth::user()->roles->first()->name == 'guru')
            {
                return redirect('/');
            }
            else {
                return "gagal";
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
