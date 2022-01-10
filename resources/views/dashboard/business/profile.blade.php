@extends('dashboard.business.dashboard')

@section('content')
<div class="container">
<div class="profile_wrapper">
    <div class="profile_section_photo">
        <img src="">
    </div>
    <div class="profile_section_content">
        <div class="profile_section_content_labels row">
            <div class="col col-6">
            <p class="inside_offer_element_before_content">Imię</p>
            <p class="profile_section_label">Monika</p>
            </div>
            <div class="col col-6">
                <p class="inside_offer_element_before_content">Nazwisko</p>
                <p class="profile_section_label">Piątkowska</p>
            </div>
        </div>
        <div class="profile_section_content_labels row">
            <div class="col col-6">
            <p class="inside_offer_element_before_content">E-mail</p>
            <p class="profile_section_label">monikapiatkowska.mp@gmail.com</p>
            </div>
            <div class="col col-6">
            <p class="inside_offer_element_before_content">Numer telefonu</p>
            <p class="profile_section_label">123456789</p>
            </div>
        </div>
        <div class="profile_section_content_labels row">
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Ulica</p>
            <p class="profile_section_label">Mikke</p>
            </div>
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Kod pocztowy</p>
            <p class="profile_section_label">60-461</p>
            </div>
            <div class="col col-4">
            <p class="inside_offer_element_before_content">Miasto</p>
            <p class="profile_section_label">Poznań</p>
            </div>
        </div>
    </div>
</div>
@endsection