<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("pages.login");
    }
    public function registration(){
        return view("pages.registration");
    }

    public function profile(){
        return view("pages.profile");
    }
}
