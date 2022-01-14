<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Send;
use Illuminate\Support\Facades\Auth;


class OffersController extends Controller
{
      public function index()
    {
        $data = Offer::latest()->paginate(5);
        if(Auth::guard('business')->user()){
            return view('offers.business.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        if(Auth::guard('user')->user()){
            return view('offers.user.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('offers.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
      public function show(Offer $offer)
   {
            $offer->zakres = explode(',',$offer->zakres_uslug);
            if(Auth::guard('business')->user()){

              return view('offers.business.show',compact('offer'));
            }
            if(Auth::guard('user')->user()){
              return view('offers.user.show',compact('offer'));
            } 
        return view('offers.show',compact('offer'));
    } 
        public function create()
    {
        if(Auth::guard('business')->user())
        {
        return view('offers.create');
        }
      return  redirect(route('business.login'));
    } 
    public function store(Request $request)
    {

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'working_days' => 'required',
            'zakres_uslug' => 'required',
            'hours_start' => 'required',
            'hours_stop' => 'required',
            'price_min' => 'required',
            'price_max' => 'required',
        ]);
        $offer = $request->all();
        $offer['business_id'] = Auth::guard('business')->id();

    
        Offer::create($offer);
     
        return redirect()->route('offers.index')
                        ->with('success','Post created successfully.');
    }
        public function edit(Offer $offer)
    {
        return view('offers.business.edit',compact('offer'));
    }
        public function myOffers(){
                {
                    

        if(Auth::guard('business')->user()){
                    $data = Offer::where('business_id',Auth::guard('business')->id())->get();
            return view('offers.business.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        if(Auth::guard('user')->user()){
        $data = Send::where('user_id',Auth::guard('user')->id())->get();
            return view('orders.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('offers.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
        }
        public function update(Request $request, Offer $offer)
    {

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'working_days' => 'required',
            'zakres_uslug' => 'required',
            'hours_start' => 'required',
            'hours_stop' => 'required',
            'price_min' => 'required',
            'price_max' => 'required',
        ]);
    
        $offer->update($request->all());
    
        return redirect()->route('offers.index')
                        ->with('success','Offer updated successfully');
    }

    public function destroy(Offer $offer)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
      
}
