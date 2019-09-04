<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admnicontrollers extends Controller
{
    public function index(){
        return view('admin');
    }
}
