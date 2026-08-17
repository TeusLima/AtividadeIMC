<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function logar(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials =$request->only('email', 'password');

        if(!Auth::attempt($credentials)){

            return redirect('/login')->withErrors('Usuario ou senha invalidos');

        }

        return to_route('imc.index');
    }

    public function destroy(){

        Auth::logout();

        return to_route('login');
    }
}
