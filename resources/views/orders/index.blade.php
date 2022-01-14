@extends('dashboard')

@section('content')

<div class="dashboard orders">
    <div class="orders_wrapper container">
        <div class="offers_heading">Twoje zamówienia</div>
                @foreach ($data as $offer)
                @include('components.sections.order',$offer)
        @endforeach
    </div>
</div>


@endsection