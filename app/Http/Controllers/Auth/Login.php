<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function __construct(){

    }

    public function show(){
        return view('auth.login');
    }
}
