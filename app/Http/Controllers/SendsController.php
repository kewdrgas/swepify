<?php

namespace App\Http\Controllers;

use App\Models\Send;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendsController extends Controller
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
      //  dd($request);
   /*     $request->validate([
            'adres' => 'required',
            'metraz' => 'required',
            'zakres_uslug' => 'required',
            'data' => 'required',
            'offer_id' => 'required',
        ]);
        */
        $offer = $request->all();
        $offer['user_id'] = Auth::guard('user')->id();

       // dd($offer);
        Send::create($offer);
     
        return redirect()->route('orders.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function show(Send $send)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function edit(Send $send)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Send $send)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function destroy(Send $send)
    {
        //
    }
}
