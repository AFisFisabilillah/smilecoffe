<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("Auth.login");
    }

    public function login(Request $request) {
       $request->validate([
        "email"=> ['required', 'email:dns'],
        'password'=> ['required']
       ]);

       $validate = $request->only(['email', 'password']);
       $remember = $request->has(['remember']);

       if(Auth::attempt($validate,$remember)){
        $request->session()->regenerate();
        return redirect()->intended('/home');
       }

       return back()->with('loginError', 'Login gagal');
    }
}
