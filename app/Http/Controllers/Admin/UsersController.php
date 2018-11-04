<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Validator;
use Auth;

class UsersController extends Controller
{
    public function login()
    {
        if (request()->isMethod('POST')) {
            $validator = Validator::make(request()->all(), [
                'email' => 'required|min:5|max:50|email',
                'password' => 'required|min:5|max:50'
            ]);
            if ($validator->fails()) {
                return redirect('admin/oturumac')
                    ->withErrors($validator);
            }
            $credentials = [
                'email' => request()->get('email'),
                'password' => request()->get('password')
            ];
            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.home');
            }
            else{
                return back()->withInput()->withErrors(['email'=>'Giriş hatalı !']);
            }
        }
        return View::make('admin.login');
    }
}
