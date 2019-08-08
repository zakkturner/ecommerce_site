<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('/account/register');
    }
    public function login()
    {
        return view('/account/login');
    }
}
