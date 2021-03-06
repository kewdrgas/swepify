<?php

namespace App\Http\Controllers;

use App\Models\SendOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               dd('kupa');
        $request->validate([
            'adres' => 'required',
            'metraz' => 'required',
            'zakres_uslug' => 'required',
            'data' => 'required',
            'offer_id' => 'required',
        ]);
        $offer = $request->all();
        $offer['user_id'] = Auth::guard('business')->id();


        SendOffer::create($offer);
     
        return redirect()->route('orders.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sendoffer  $sendoffer
     * @return \Illuminate\Http\Response
     */
    public function show(SendOffer $sendoffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sendoffer  $sendoffer
     * @return \Illuminate\Http\Response
     */
    public function edit(SendOffer $sendoffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sendoffer  $sendoffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendOffer $sendoffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sendoffer  $sendoffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendOffer $sendoffer)
    {
        //
    }
}
