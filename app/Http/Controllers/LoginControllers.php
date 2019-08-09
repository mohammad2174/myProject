<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControllers extends Controller
{
    public function index(){

        return view('login');
    }
}
