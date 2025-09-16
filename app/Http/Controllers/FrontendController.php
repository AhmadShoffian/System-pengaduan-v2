<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('frontend.login');
    }


    function check(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        //  if (Auth::attempt($credentials)) {
        //     dd('Login berhasil', Auth::user());
        //     $request->session()->regenerate();
        //     return redirect()->intended('/home');
        // }
        // dd('Login gagal', $credentials);

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }



    public function register()
    {
        return view('frontend.register');
    }
}
