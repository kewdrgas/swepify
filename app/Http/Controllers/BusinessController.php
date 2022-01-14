<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\Business;
use App\Models\User;

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
            if(Auth::guard('business')->user()){
                $id = Auth::guard('business')->id();
                $data = Business::where('id',Auth::guard('business')->id())->first();
                
                return view('dashboard.business.profile',compact('data'));
            }
            else{
                $data = User::where('id',Auth::guard('user')->id())->first();
                return view('dashboard.profile',compact('data'));
            }
       // }
        // return redirect()->route('business.login');
    }
}
