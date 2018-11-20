<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function show()
    {
        $company = User::where('company',1)
            ->orderBy('id','ASC')
            ->get();
        return view('admin.company',compact('company'));
    }
    public function status(Request $request)
    {

        DB::table('users')
            ->where('id',$request->id)
            ->update(['status'=>$request->status]);
        return response()
            ->json([
                'status'=>'success'
            ]);
    }
    public function delete(Request $request)
    {
        DB::table('users')->where('id',$request->id)->delete();
        return response()
            ->json([
                'status'=>'success'
            ]);

    }
}
