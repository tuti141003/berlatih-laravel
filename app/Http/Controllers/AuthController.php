<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function Register(){
        return view('form');
    }

    public function selamat(Request $request){

        $firstName =$request->firstname;
        $lastName =$request->lastname;

        return  view ('welcome', compact('firstName', 'lastName'));
    
    }

    public function selamat_post(){
        return view('welcome');
        
    }
}
