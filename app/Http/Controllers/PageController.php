<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function landing(){
        return view('landingPage');
    }
    public function login(){
    return view('auth.login');
    }
}
