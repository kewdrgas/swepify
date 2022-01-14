@extends('dashboard.business.dashboard')

@section('content')
<div class="container dashboard">
<div class="profile_wrapper">
        <div class="row">
            <div class="pull-right col-6">
                <a class="btn btn-primary" href="{{ route('offers.index') }}"> Wróć</a>
            </div>
            <div style="text-align:right" class="pull-right col-6">
                <a  class="btn btn-primary" href="{{ route('offers.index') }}">Edytuj</a>
            </div>
        </div>
    
    <div class="profile_section_photo">
        <img class="profile_section_photo_img" src="{{ URL::asset('images/user.png'); }}">
      
    </div>
      <p class="profile_section_name">{{$data->first_name}}</p>
    <div class="profile_section_content">
        <div class="profile_section_content_labels row">
            <div class="col col-6">
            <p class="inside_offer_element_before_content">Imię</p>
            <p class="profile_section_label">{{$data->first_name}}</p>
            </div>
            <div class="col col-6">
                <p class="inside_offer_element_before_content">Nazwisko</p>
                <p class="profile_section_label">{{$data->last_name}}</p>
            </div>
        </div>
        <div class="profile_section_content_labels row">
            <div class="col col-6">
            <p class="inside_offer_element_before_content">E-mail</p>
            <p class="profile_section_label">{{$data->email}}</p>
            </div>
            <div class="col col-6">
            <p class="inside_offer_element_before_content">Numer telefonu</p>
            <p class="profile_section_label">{{$data->phone_number}}</p>
            </div>
        </div>
        <div class="profile_section_content_labels row">
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Ulica</p>
            <p class="profile_section_label">{{$data->street}}</p>
            </div>
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Kod pocztowy</p>
            <p class="profile_section_label">{{$data->postal_code}}</p>
            </div>
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Miasto</p>
            <p class="profile_section_label">{{$data->city}}</p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection