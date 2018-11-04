<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CompanyController extends Controller
{
    public function show()
    {
        $company = User::where('company',1)->get();
        return view('admin.company',compact('company'));
    }
}
