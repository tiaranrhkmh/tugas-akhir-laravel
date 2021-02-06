<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->all('username','password'))){
            return redirect('/home/book');
        }
        return redirect('/login');
    }
}
