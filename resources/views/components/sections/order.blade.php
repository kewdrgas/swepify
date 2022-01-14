<div class="offer_wrapper">
        <div class="order_section">  
        
      
                <div class="order_wrapper_element ">
                    <p class="inside_offer_element_before_content ">Data usługi</p>
                    <p class="inside_offer_element_content">{{date('d-m-Y', strtotime($offer->data))}}</p>
                </div>
                  <div class="order_wrapper_element ">
                    <p class="inside_offer_element_before_content">Osoba sprzątająca</p>
                    <p class="inside_offer_element_content">Ania</p>
                </div>
               <div class="order_wrapper_element">
                    <p class="inside_offer_element_before_content">Dokładny adres</p>
                    <p class="inside_offer_element_content">{{$offer->adres}}</p>
                </div>
        
                 <div class="order_wrapper_element ">
                    <p class="inside_offer_element_before_content">Metraż</p>
                    <p class="inside_offer_element_content">{{$offer->metraz}} m^2</p>
                </div>    

                       
       
   


         </div>

    <div class="offer_section">
        <a href="{{route('offers.index')}}" class="button button__orange hero_button">Zamów ponownie</a>

    </div>
 </div>