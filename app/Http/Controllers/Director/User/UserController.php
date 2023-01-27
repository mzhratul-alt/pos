<?php

namespace App\Http\Controllers\Director\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Director.User.all_user', compact('users'));
    }

    public function store(Request $request){
        $request->validate([
            "name"=>'required',
            "email"=>'required|email',
            "phone"=>'required',
            "password"=>'required',
        ]);
        $companyCode = 'IOM';
        $yearCode = Carbon::now()->format('y');
        $monthCode = Carbon::now()->format('m');
        $dateCode = Carbon::now()->format('d');
        $userCount = User::count();

        $employee_id = $companyCode."-".$yearCode.$monthCode.$dateCode.str_pad(++$userCount,5, "0",STR_PAD_LEFT);

        User::create([
            "employee_id"=>$employee_id,
            "profile_pic"=>'test',
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "status"=>true,
            "password"=>Hash::make($request->password),
        ]);
        return back();
    }
}
