<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('login.login');
    }
    
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
