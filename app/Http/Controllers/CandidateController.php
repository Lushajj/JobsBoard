<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function show()
    {
        return view('candidate');
    }
}
