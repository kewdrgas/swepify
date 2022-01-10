@extends('app')

@section('content')

<div class="dashboard offer">
    <div class="inside_offer_wrapper container">
        <div class="inside_offer_public_date">Dodane dnia: 09.01.2022</div>
         <div class="inside_offer_info_box">
            <p class="inside_offer_info_box_content"> Możliwość dojazdu do: 15km</p>
            <p class="inside_offer_info_box_content"> Płatność: gotówką lub kartą</p>
        </div>
        <h3 class="inside_offer_title">Sprzątaczka od zaraz - ciesz się czystością!</h3>
        <div class="inside_offer_elements">
            <div class="inside_offer_element">
                <div class="inside_offer_wrapper_element location_inside_offer">
                    <p class="inside_offer_element_before_content ">Lokalizacja</p>
                    <p class="inside_offer_element_content">Poznań</p>
                </div>
               <div class="inside_offer_wrapper_element money_inside_offer">
                    <p class="inside_offer_element_before_content">Widełki cenowe</p>
                    <p class="inside_offer_element_content">15-20 PLN</p>
                </div>
            </div>
            <div class="inside_offer_element">
                <div class="inside_offer_wrapper_element calendar_inside_offer">
                    <p class="inside_offer_element_before_content">Dni pracy</p>
                    <p class="inside_offer_element_content">Pon, Wt, Śr</p>
                </div>
                <div class="inside_offer_wrapper_element clock_inside_offer">
                    <p class="inside_offer_element_before_content">Godziny pracy</p>
                    <p class="inside_offer_element_content">8:00-20:00</p>
                </div>       
            </div>
        </div>
        <div class="inside_offer_public_date_border"></div>
<div class="inside_offer_listing">
    <h5 class="inside_offer_listing_title">Zakres usług:</h5>
    <ul class="inside_offer_listing_content"> 
    <li>Mycie okien</li>
    <li>Ścieranie kurzy</li>
    <li>Mycie podłóg</li>
    <li>Odkurzanie</li>
    <li>Czyszczenie piekarnika</li></ul>
</div>

<div class="inside_offer_description">
     <h5 class="inside_offer_description_title">Szczegółowy opis:</h5>
    <p class="inside_offer_description_content"> Witam, jestem Marta. Sprzątaniem zajmuje się już od 10 lat. Jestem bardzo dokładną osobą, która podczas sprzątania dba o każdy szczegół czyszczenia. Zapraszam do skorzystania z moich usług sprzątających :)</p>
</div>
<div class="inside_offer_section">
        <a href="{{route('offer.show')}}" class="button button__orange hero_button">Zamawiam</a>

    </div>

@endsection

