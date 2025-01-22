<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('etudiants.login');
    }
    public function login(Request $request){
        // dd($request);
        $values=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($values)){
            $request->session()->regenerate();
            return redirect()->route('welcome')->with('succesLogin','good');
        }
        return redirect()->back()->with('error','bad');
        
    }
}
