@extends('app')

@section('content')

<div class="dashboard orders">
    <div class="orders_wrapper container">
        <div class="offers_heading">Tutaj heading dla listingu</div>
        @include('components.sections.order')
        @include('components.sections.order')
         @include('components.sections.order')
          @include('components.sections.order')
    </div>
</div>


@endsection