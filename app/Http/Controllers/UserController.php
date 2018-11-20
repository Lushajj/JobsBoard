<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:50',
        ]);
        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator);
        }
        $info = request()->all();
        $credentials = [
            'email'=>$info['name'],
            'password'=>$info['password']
        ];
        if (Auth::attempt($credentials)) {
           return redirect()->intended('/');
        }
    }
}
