<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\User;

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
    public function editProfile(){

                 $id = Auth::guard('business')->id();
                $user = User::where('id',Auth::guard('user')->id())->first();
        return view('dashboard.editprofile',compact('user'));
    }


        
    public function update(Request $request){
        $user = User::where('id',Auth::guard('user')->id())->first();
        $request->validate([
            'email' => 'required|email',
            'city' => 'required',
            'phone_number' => 'required|numeric',
            'city' => 'required',
            'name' => 'required',
            'last_name' => 'required',
        ]);

        $user->update([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'city' => $request['city'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
        ]);
        $user->save();
    
        return redirect()->route('user.profile')
                        ->with('success','Profile updated successfully');
    }
}
