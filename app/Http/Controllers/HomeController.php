<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Index Page
    public function index(){
        return view('home.index',['title'=>'Home']);
    }

    //Login Page
    public function Login(){
        return view('login.index',['title'=>'Login']);
    }
}
