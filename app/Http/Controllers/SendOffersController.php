<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSendOffersRequest;
use App\Http\Requests\UpdateSendOffersRequest;
use App\Models\SendOffers;

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
     * @param  \App\Http\Requests\StoreSendOffersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSendOffersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SendOffers  $sendOffers
     * @return \Illuminate\Http\Response
     */
    public function show(SendOffers $sendOffers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SendOffers  $sendOffers
     * @return \Illuminate\Http\Response
     */
    public function edit(SendOffers $sendOffers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSendOffersRequest  $request
     * @param  \App\Models\SendOffers  $sendOffers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSendOffersRequest $request, SendOffers $sendOffers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SendOffers  $sendOffers
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendOffers $sendOffers)
    {
        //
    }
}
