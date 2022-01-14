<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;

class UsersController extends Controller
{
       public function dashboard()
    {
        if(Auth::guard('user')->user())
        {
             $data = Offer::latest()->paginate(5);
        return view('offers.user.home',compact('data'));
        }
        return redirect()->route('user.login');
    }
    public function orders(){
        
        return view('orders.index');
    }
}
