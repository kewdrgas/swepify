
@extends('dashboard.business.dashboard')

@section('content')

<div class="dashboard offers">
    <div class="offers_wrapper container">
        <div class="offers_heading">To Twoje oferty</div>
        @foreach ($data as $offer)
        @include('offers.business.offer',$offer)
        @endforeach
    </div>
</div>


@endsection