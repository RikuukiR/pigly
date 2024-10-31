<?php

namespace App\Http\Controllers;

use APP\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function step1()
    {
        return view('user.step1');
    }

    public function step2()
    {
        return view('user.step2');
    }

    public function login()
    {
        return view('user.login');
    }

    public function logout()
    {
        return view('user.logout');
    }
}
