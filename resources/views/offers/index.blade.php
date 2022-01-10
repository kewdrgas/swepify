@extends('app')

@section('content')

<div class="dashboard offers">
    <div class="offers_wrapper container">
        <div class="offers_heading">Mamy dla Ciebie X offert!</div>
        @include('components.sections.offer')
        @include('components.sections.offer')
    </div>
</div>


@endsection