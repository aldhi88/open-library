<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return view('modul.auth.login.index');
    }

    public function loginPost(Request $request)
    {
        $dtForm = $request->except('_token');
        

    }

    public function register()
    {
        return view('modul.auth.register.index');
    }

    public function registerPost()
    {
        echo "proses register";
    }

}
