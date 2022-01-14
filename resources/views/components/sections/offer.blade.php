<div class="offer_wrapper">
        <div class="offer_section d-flex">  
        <img class="offer_section_photo" src="{{ URL::asset('images/52068.jpg'); }}">
        <div class="offer__content">        
            <h2 class="offer_title">{{$offer->title}}</h2>
            <div class="offer_location">
                <p class="offer_location_content location">{{$offer->location}}</p>
            </div>
            <div class="offer_elements_container">
            <div class="offer_elements">
                <span class="offer_element_content calendar">
                    @foreach($offer->working_days as $day)
                    {{$day}}, 
                @endforeach
            </span>
                <span class="offer_element_content clock">{{$offer->hours_start}}:00-{{$offer->hours_stop}}:00</span>
                <span class="offer_element_content money">{{$offer->price_min}}-{{$offer->price_max}} PLN</span>
            </div>
        </div>
            <div class="offer_public_date_border"></div>
            <div class="offer_public_date_div">
                <p class="offer_public_date_content">Opublikowano dnia: {{$offer->created_at}}</p>
            </div>
        </div>


    </div>

    <div class="offer_section">
        <a href="{{route('offers.show', ['offer' => $offer]) }}"  class="button button__orange hero_button">Zobacz więcej</a>

    </div>
    </div>