<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.registration');
    }
    public function addUser(Request $request){
        $validate = $request->validate([
            'email'=>'required|email',
            'name'=>'required|min:3',
            'password'=>'required'
        ]);

        $user = User::create($validate);

        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login-form'))->withError([
            'formError'=>'Ошибка при создании пользователя!',
        ]);
    }
}
