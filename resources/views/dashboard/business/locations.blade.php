
@extends('dashboard.business.dashboard')

@section('content')
<div class="location_container container">
    <div class="location_wrapper">
        <h2>Nasze lokalizacje</h2>
        <div class="location_sections">
            <div class="location_section">
                <p>Warszawa</p>
                <p>Kraków</p>
                <p>Łódź</p>
                <p>Szczecin</p>
            </div>
       <div class="location_section">
    <img src="{{ URL::asset('images/map.png'); }}">
       </div>
            <div class="location_section">
                <p>Poznań</p>
                <p>Wrocław</p>
                <p>Gdańsk</p>
                <p>Katowice</p>
            </div>
        </div>
    </div>
</div>
    

@endsection