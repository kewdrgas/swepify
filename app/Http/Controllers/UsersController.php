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
        return view('dashboard');
        }
        return redirect()->route('user.login');
    }
    public function orders(){
        
        return view('orders.index');
    }
}
