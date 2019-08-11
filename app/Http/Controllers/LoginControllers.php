<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User;
use Hash;
use Mail;
use DB;
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
            $id =User::find($user);
            $mail = array('name'=>$name,'id'=>$id);
            Mail::send('mail', $mail, function($message) {
                $email = \Request::input('email');
                $name = \Request::input('name');
                $message->to($email, $name)->subject
                ('ثبت نام در سایت');
                $message->from('mohammadreza.khorrami21@gmail.com','mohammadreza2174');
            });

            if (Mail::failures()) {
                return "لطفا بعدا تلاش کنید";
            }else{
                return view('signup',['name'=>$name,'email'=>$email,'password'=>$password]);
            }
        }

    }
    public function signin(){
        $id = User::find(5);
        return view('signin',['id'=>$id]);
    }
    public function result($id){
        $user = User::where('id',$id)->update(['status'=>1]);
        if($user){
            $user = User::where('id',$id)->get();
            return view('result',['user'=>$user]);
        }
    }
}
