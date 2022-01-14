<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;

class BusinessController extends Controller
{
       public function dashboard()
    {
   
        if(Auth::guard('business')->user()){
            $data = Offer::where('business_id',Auth::guard('business')->id())->get();
            return view('offers.business.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return redirect()->route('business.login');
    }
    public function profile()
    {
        // if(Auth::guard('business')->user())
        // {
        return view('dashboard.business.profile');
       // }
        // return redirect()->route('business.login');
    }
}
