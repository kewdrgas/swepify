<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Offer::latest()->paginate(5);
        $count =$data->count();
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guard('business')->user())
        {
        return view('offers.create');
        }
      return  redirect(route('business.login'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'working_days' => 'required',
            'zakres_uslug' => 'required',
            'dojazd' => 'required',
            'hours_start' => 'required',
            'hours_stop' => 'required',
            'price' => 'required',
        ]);
        $offer = $request->all();
        $offer['business_id'] = Auth::guard('business')->id();

    
        Offer::create($offer);
     
        return redirect()->route('offers.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
         //   dd($offer);
        return view('offers.business.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
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
    
        $offer = collect($request->all())->except(['_token']);
        $offer = $offer->toArray();
        $offer['business_id'] = Auth::guard('business')->id();
        Offer::whereId($request ->id)->update($offer);
    
        return redirect()->route('offers.index')
                        ->with('success','Offer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
    
        return redirect()->route('offer.index')
                        ->with('success','Offer deleted successfully');
    }
}
