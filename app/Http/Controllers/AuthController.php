<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(){
        return view("users/signup");
    }
    function loginPage(){
        return view("users/login");
    }
    function signupStore(Request $request){
        User::create([
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'telephone'=>$request->phone,
        ]);
        auth()->attempt($request->only('email' , 'password'));
        return redirect('/books');
    }

    function loginStore(Request $request){
        auth()->attempt($request->only('email' , 'password'));
        return redirect('/books');
    }
}
