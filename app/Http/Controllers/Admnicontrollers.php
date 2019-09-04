<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\Sendemailjob;

class Admnicontrollers extends Controller
{
    public function index(){
        return view('admin');
    }
    public function sendemail(){
        dispatch(new Sendemailjob());
        return "ایمیل به کاربران با موفقیت ارسال شد!";
    }
}
