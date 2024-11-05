<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\Step1Request;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function step1()
    {
        return view('user.step1');
    }

    public function store(Step1Request $request)
    {
        $validatedData = $request->validated();
        
        // ユーザーをデータベースに保存する
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('initialWeight');
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