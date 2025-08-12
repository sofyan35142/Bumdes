<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Landingpage.login');
    }
    public function postsignin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin')->with('success', 'Berhasil Login');
        }
        return redirect('/admin/signin')->with('salah', 'Email Atau Password Salah');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/admin/signin')->with('success', 'Berhasil Logout');
    }
}
