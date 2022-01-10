<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
       public function dashboard()
    {
        if(Auth::guard('business')->user())
        {
        return view('dashboard.business.dashboard');
        }
        return redirect()->route('business.login');
    }
    public function profile()
    {
        if(Auth::guard('business')->user())
        {
        return view('dashboard.business.profile');
        }
        return redirect()->route('business.login');
    }
}
