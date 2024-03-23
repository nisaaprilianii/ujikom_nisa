<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('web')->attempt($request->only('username', 'password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function indexMember()
    {
        return view('login-member');
    }

    public function loginMember(Request $request)
    {
        if (Auth::guard('member')->attempt($request->only('username', 'password'))){
            return redirect('/member/dashboard');
        }else{
            return redirect('/member/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }

    public function logoutMember()
    {
        Auth::logout();
        return view('/member/login');
    }
}
