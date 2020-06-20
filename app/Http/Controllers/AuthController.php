<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller{

    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            dd($request->all());
        }
        return redirect('/membre');
    }
}