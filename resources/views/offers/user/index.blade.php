
@extends('dashboard')

@section('content')

    <div class="dashboard offers">
        <div class="offers_wrapper container">
            <div class="offers_heading">Mamy dla Ciebie {{$data->count()}}  ofert!</div>
            @foreach ($data as $offer)
            @include('components.sections.offer',$offer)
            @endforeach
        </div>
    </div>


@endsection