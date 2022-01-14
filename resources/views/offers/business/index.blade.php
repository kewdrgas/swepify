
@extends('dashboard.business.dashboard')

@section('content')

<div class="dashboard offers">
    <div class="offers_wrapper container">
        <div class="offers_heading">Masz wystawionych {{$data->count()}}  ofert!</div>
        @foreach ($data as $offer)
        @include('components.sections.offer',$offer)
        @endforeach
    </div>
</div>


@endsection