<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
       public function dashboard()
    {
        if(Auth::guard('user')->user())
        {
        return view('user');
        }
        return redirect()->route('user.login');
    }
}
