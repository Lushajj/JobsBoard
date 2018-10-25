<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function show()
    {
        return view('jobs-list');
    }
}
