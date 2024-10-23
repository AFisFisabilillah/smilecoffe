<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegsiterController extends Controller
{
    public function index(){
        return view("Auth.register");
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['required', 'max:255'],
            'email'=> ['required','email:dns', 'lowercase', 'unique:'.User::class],
            'username'=>['required','regex:/^\S*$/','unique:'.User::class],
            'password' => ['required','confirmed',' min:4']
        ]);

        $validate['password'] = Hash::make($request->password);
        User::create($validate);
        return redirect()->route('login')->with('success','Register Berhasil');
    }
}
