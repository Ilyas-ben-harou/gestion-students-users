<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function show(){
        $users=User::paginate(10);
        return view('users.users',compact('users'));
    }
    public function detail(Request $request){
        $user=User::findOrFail($request->id);
        return view('users.detail',compact('user'));
    }
}
