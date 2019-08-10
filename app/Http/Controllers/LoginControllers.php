<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User;
use Hash;
use Mail;

class LoginControllers extends Controller
{
    public function index(){

        return view('login');
    }
    public function store(EditRequest $request){

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = new User();
        $user->name=$name;
        $user->email=$email;
        $user->password=Hash::make($password);

        if($user->save()){

            $mail = array('name'=>$name);
            Mail::send('mail', $mail, function($message) {
                $email = \Request::input('email');
                $name = \Request::input('name');
                $message->to($email, $name)->subject
                ('ثبت نام در سایت');
                $message->from('mohammadreza.khorrami21@gmail.com','mohammadreza2174');
            });
            // echo "HTML Email Sent. Check your inbox.";
            if (Mail::failures()) {
                return "لطفا بعدا تلاش کنید";
            }else{
                return back();
            }
        }

    }
}
