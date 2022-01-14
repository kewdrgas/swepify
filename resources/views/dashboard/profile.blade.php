@extends('dashboard')

@section('content')
<div class="container dashboard">
    <div class="profile_wrapper">
        <div class="profile_section_photo">
            <img class="profile_section_photo_img" src="{{ URL::asset('images/user.png'); }}">
        
        </div>
        <p class="profile_section_name">{{$data->name}}</p>
        <div class="profile_section_content">
            <div class="profile_section_content_labels row">
                <div class="col col-6">
                <p class="inside_offer_element_before_content">Imię</p>
                <p class="profile_section_label">{{$data->name}}</p>
                </div>
                <div class="col col-6">
                    <p class="inside_offer_element_before_content">Email</p>
                    <p class="profile_section_label">{{$data->email}}</p>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection