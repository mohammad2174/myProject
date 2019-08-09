<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User;
use Hash;

class LoginControllers extends Controller
{
    public function index(){

        return view('login');
    }
    public function store(EditRequest $request){

//        $name = $request->name;
//        $email = $request->email;
//        $password = $request->password;
//
//        $user = new User();
//        $user->name=$name;
//        $user->email=$email;
//        $user->password=Hash::make($password);
//
//        if($user->save()){
//            return back();
//        }

    }
}
