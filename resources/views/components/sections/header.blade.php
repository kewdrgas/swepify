    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container row-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logo" src="{{ URL::asset('images/logo-swepify.svg'); }}"></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                       
                    </li>
                </ul>

                <div class="menu--buttons d-flex">
                    <a href="{{route('offers.index')}}" class="nav-link">Przeglądaj oferty</a>
                    <a href="{{route('locations')}}" class="nav-link">Lokalizacje</a>
                    <header-button-component classButton="button__whiteorange" imguser="{{ URL::asset('images/3530467.jpg'); }}" imgbusiness="{{ URL::asset('images/52068.jpg'); }}" text="Zaloguj się" url="{{route('login')}}"></header-button-component>
                    <header-button-component classButton="button__orange mg" imguser="{{ URL::asset('images/3530467.jpg'); }}" imgbusiness="{{ URL::asset('images/52068.jpg'); }}" text="Zarejestruj się" url="{{route('signup')}}"></header-button-component>

                </div>
            </div>
        </div>
    </nav>