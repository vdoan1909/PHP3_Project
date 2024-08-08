<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function postLogin(UserLoginRequest $request)
    {
        // $request->setUserId()
        
        // $request->validate(
        //     [
        //         "email" => "required|email|exists:users:email",
        //         "password" => "required|min:8"
        //     ]
        // );
    }
}
