<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function show()
    {
        return view('signup');
    }

    public function person_register()
    {
        $validator = Validator::make(request()->all(), [
            'username' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:25',
        ]);
        if ($validator->fails()) {
            return redirect('signup')
                ->withErrors($validator);
        }
        $users =User::create([
            'name' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('sifre')),
            'phone' => request('phone'),
            'personal' => 1,
            'company' => 0
        ]);
        return redirect()->route('login')
            ->with('message_subject','success')
            ->with('message','Kayıt Başarılı');
    }
    public function company_register()
    {
        $validator = Validator::make(request()->all(), [
            'company_name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:25',
        ]);
        if ($validator->fails()) {
            return redirect('signup')
                ->withErrors($validator);
        }
        $company =User::create([
            'name' => request('company_name'),
            'email' => request('email'),
            'password' => Hash::make(request('sifre')),
            'phone' => request('phone'),
            'personal' => 0,
            'company' => 1
        ]);
        return redirect()->route('login')
            ->with('message_subject','success')
            ->with('message','Kayıt Başarılı');
    }
}
