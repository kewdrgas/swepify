@extends('app')

@section('content')

<div class="dashboard offer">
    <div class="inside_offer_wrapper container">
        <div class="inside_offer_public_date">Dodane dnia: {{$offer->created_at}}</div>
         <div class="inside_offer_info_box">
            <p class="inside_offer_info_box_content"> Możliwość dojazdu do: 15km</p>
            <p class="inside_offer_info_box_content"> Płatność: gotówką lub kartą</p>
        </div>
        <h3 class="inside_offer_title">{{$offer->title}}</h3>
        <div class="inside_offer_elements">
            <div class="inside_offer_element">
                <div class="inside_offer_wrapper_element location_inside_offer">
                    <p class="inside_offer_element_before_content ">Lokalizacja</p>
                    <p class="inside_offer_element_content">{{$offer->location}}</p>
                </div>
               <div class="inside_offer_wrapper_element money_inside_offer">
                    <p class="inside_offer_element_before_content">Widełki cenowe</p>
                    <p class="inside_offer_element_content">{{$offer->price_min}}-{{$offer->price_max}} PLN</p>
                </div>
            </div>
            <div class="inside_offer_element">
                <div class="inside_offer_wrapper_element calendar_inside_offer">
                    <p class="inside_offer_element_before_content">Dni pracy</p>
                    <p class="inside_offer_element_content">                    @foreach($offer->working_days as $day)
                    {{$day}}, 
                @endforeach</p>
                </div>
                <div class="inside_offer_wrapper_element clock_inside_offer">
                    <p class="inside_offer_element_before_content">Godziny pracy</p>
                    <p class="inside_offer_element_content">{{$offer->hours_start}}:00-{{$offer->hours_stop}}:00</p>
                </div>       
            </div>
        </div>
        <div class="inside_offer_public_date_border"></div>
<div class="inside_offer_listing">
    <h5 class="inside_offer_listing_title">Zakres usług:</h5>
    <ul class="inside_offer_listing_content"> 
        @foreach ($offer->zakres as $item)
                <li>{{$item}}</li>
        @endforeach
    </ul>
</div>

<div class="inside_offer_description">
     <h5 class="inside_offer_description_title">Szczegółowy opis:</h5>
    <p class="inside_offer_description_content"> {{$offer->description}}</p>
</div>
<div class="inside_offer_section">
        <a href="{{route('offers.show',$offer)}}" class="button button__orange hero_button">Zamawiam</a>
        <call-to-action classButton="button__orange" imguser="{{ URL::asset('images/3530467.jpg'); }}" imgbusiness="{{ URL::asset('images/52068.jpg'); }}" text="Zaloguj się" url="{{route('login')}}"></call-to-action>

    </div>

@endsection

