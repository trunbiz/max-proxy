<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
    }
    public function showLogin()
    {
        return view('sign-in');
    }

    public function login(Request $request)
    {
        $request = $request->all();
        $params = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if (Auth::attempt($params))
        {
            return redirect()->route('proxies.index');
        }
        return back();
    }
}
