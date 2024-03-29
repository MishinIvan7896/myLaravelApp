<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function showPrivatePage(){
        return view('privalePage');
    }

    public function login(Request $result){
        $formFields = $result->only(['email', 'password']);
        
        if(Auth::attempt($formFields)){
            return redirect()->intended('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
