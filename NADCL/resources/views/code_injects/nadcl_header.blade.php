<div style="margin-left:20px; margin-right:20px; padding-top: 10px;">
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Crimson Witnesses + NADCL @ TI12</strong> <a class="na_red_text hyperlink"
            href="https://www.eventbrite.ie/e/crimson-witnesses-ti12-finals-party-featuring-nadcl-turbo-mode-tickets-657850286917"
            class="alert-link">Get your tickets NOW!</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle"id="btn-danger" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Tournaments
                </button>
                <ul class="dropdown-menu">
                    <li><a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Tournaments/NADCL_SeasonFour') }}">Season 4</a></li>
                    <li><a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Season/5') }}">Season 5</a></li>
                </ul>
            </div>
        </div>
        <div class="col-auto">
            <div class="dropdown">
                <button type="button" id="btn-danger"class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    NADCL Community
                </button>
                <ul class="dropdown-menu" style="text-decoration: red underline">
                    <li><a class="dropdown-item" href={{ URL('/players') }}>NADCL
                            Players</a></li>
                    <li><a class="dropdown-item" href={{ URL('/Teams') }}>NADCL
                            Teams</a></li>
                </ul>
            </div>
        </div>
        {{-- <div class="col-auto">
            <button type="button" id="btn-danger"class="btn btn-outline-info">
                <a href={{ url('/BigScreen') }} style="text-decoration: none;">Big
                    Screen</a>
            </button>
        </div> --}}
        <div class="col ">
            <div class="row justify-center">
                <div class="col-auto">
                    <a href="/">
                        <img class="header_logo" src="{{ URL('/img/nadcl_logo.png') }}">
                    </a>
                </div>
                <div class="col-auto">
                    <h6 class="center-element">
                        NADCL Player Combine has begun! Watch live on
                        <a class="na_red_text hyperlink" href="https://www.youtube.com/@NADCLeague/streams"
                            target="_blank">Youtube</a>
                        and
                        <a class="na_red_text hyperlink" href="https://www.twitch.tv/NADCLeague" target="_blank">
                            Twitch</a>
                        <div clas="row">
                            Series 1: 6pm EST | Series 2: 9pm EST |
                            Thursday, Friday, and Saturday!
                        </div>
                    </h6>
                </div>
            </div>

        </div>

        <div class="col-auto"><button type="button"id="btn-danger" class="btn btn-danger">
                <a style=" color:white; text-decoration: none;" href="https://nadcl.us/pages/nadclshop">Merch </a>
            </button></div>
        <div class="col-auto">
            <div style="display: flex; justify-content: flex-end;">
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

</div>
