<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('anasayfa');
    }
    public function logout()
    {
        Auth::logout();
        return view('anasayfa');
    }
}
