<div class="row" style="margin:0px; padding:0px;">
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Crimson Witnesses + NADCL @ TI12</strong> <a class="na_red_text hyperlink"
            href="https://www.eventbrite.ie/e/crimson-witnesses-ti12-finals-party-featuring-nadcl-turbo-mode-tickets-657850286917"
            class="alert-link">Get your tickets NOW!</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
    <div class="col-3">
        <div class="d-flex justify-content-start">
            <div class="dropdown">
                <button type="button" id="btn-danger"class="dropdown btn btn-danger dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false"> Community </button>
                <ul class="dropdown-menu" style="text-decoration: red underline">
                    <li><a class="dropdown-item" href={{ URL('/players') }}>NADCL
                            Players</a></li>
                    <li><a class="dropdown-item" href={{ URL('/Teams') }}>NADCL
                            Teams</a></li>
            </div>
            <div class="dropdown">
                <button class="dropdown btn btn-danger dropdown-toggle"id="btn-danger" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Tournaments
                </button>
                <ul class="dropdown-menu">
                    <li><a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Tournaments/NADCL_SeasonFour') }}">Season 4</a></li>
                    <li><a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Season/5') }}">Season
                            5</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-center">
            <div class="col-auto">
                <a href="/">
                    <img class="header_logo " src="{{ URL('/img/nadcl_logo.png') }}">
                </a>
                <h6 class="center-element">
                    To be eligible for player auction and/or casting head over to
                    <a class="na_red_text hyperlink" href="https://nadcl.us/pages/supporters" target="_blank">to become
                        a Supporter</a>
                </h6>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="d-flex justify-content-end">
            <button type="button"id="btn-danger" class="btn btn-danger">
                <a style=" color:white; text-decoration: none;" href="https://nadcl.us/pages/nadclshop">Merch</a>
            </button>
            @if (Route::has('login'))
                @auth
                    <button type="button" id="btn-danger"class="btn btn-danger">
                        <a style=" color:white; text-decoration: none;" href={{ url('/dashboard') }}>Dashboard</a>
                    </button>
                @else
                    <button type="button" id="btn-danger"class="btn btn-danger">
                        <a style=" color:white; text-decoration: none;" href="{{ route('login') }}">Log in</a>
                    </button>
                    @if (Route::has('register'))
                        <button type="button" id="btn-danger"class="btn btn-danger">
                            <a style=" color:white; text-decoration: none;" href="{{ route('register') }}">Register</a>
                        </button>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</div>
