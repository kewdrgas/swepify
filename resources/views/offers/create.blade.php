@extends('dashboard.business.dashboard')

@section('content')

<div class="dashboard offers">
<div class="container">
    <div class="row">
            <div class="pull-left col-6">
                <h2>Dodaj nową ofertę</h2>
            </div>
            <div class="pull-right col-6">
                <a class="btn btn-primary" href="{{ route('offers') }}"> Wróć</a>
            </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Pojawiły się problemy z formularzem<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('offers.store') }}" method="POST">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tytuł:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Podaj tytuł">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Podaj opis oferty"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokalizacja:</strong>
                    <input   type="text"class="form-control" style="height:150px" name="location" placeholder="Podaj lokalizację wykonywania usługi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Godziny pracy:</strong>
                    <input type="number" class="form-control" style="height:150px" name="hours_start" placeholder="O której godzinie rozpoczynasz pracę?">
                    <input type="number"  class="form-control" style="height:150px" name="hours_stop" placeholder="O której godzinie zamierzasz kończyć pracę?">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dni pracy:</strong>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="poniedziałek">
                    <label class="working_days__label" >Poniedziałek</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="wtorek">
                    <label class="working_days__label" >wtorek</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="środa">
                    <label class="working_days__label" >Środa</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="czwartek">
                    <label class="working_days__label" >Czwartek</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="piątek">
                    <label class="working_days__label" >Piątek</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="sobota">
                    <label class="working_days__label" >Sobota</label>
                    <input type="checkbox" class="working_days__checkbox" name="working_days[]" value="niedziela">
                    <label class="working_days__label" >Niedziela</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zakres usług:</strong>
                    <input   type="text"class="form-control" style="height:150px" name="zakres_uslug" placeholder="Po przecinku podaj zakres usług">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Widełki wynagrodzenia:</strong>
                    <input type="number" class="form-control" style="height:150px" name="price_min" placeholder="Dolna granica widełek">
                    <input type="number"  class="form-control" style="height:150px" name="price_max" placeholder="Górna granica widełek">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Dodaj ofertę</button>
            </div>
        </div>
    
    </form>
</div>

@endsection