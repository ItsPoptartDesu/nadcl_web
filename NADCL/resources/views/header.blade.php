<div class="container" style="padding-top: 10px;">
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Crimson Witnesses + NADCL @ TI12 </strong> <a class="na_red_text hyperlink"
            href="https://www.eventbrite.ie/e/crimson-witnesses-ti12-finals-party-featuring-nadcl-turbo-mode-tickets-657850286917"
            class="alert-link">Get your tickets NOW!</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="dropdown show">
                <div style="display: flex; justify-content: flex-start;">
                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <a style="">Tournaments</a>
                    </button>
                    <div class="dropdown-menu">
                        <a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Tournaments/NADCL_SeasonFour') }}">Season 4</a>
                        <a style="text-decoration: red underline" class="dropdown-item"
                            href="{{ URL('/Tournaments/NADCL_SeasonFive') }}">Season 5</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-outline-info">
                <a href={{ url('/AboutUs') }} style="text-decoration: none;">About Us</a>
            </button>
        </div>
        <div class="col-auto">
            <div class="dropdown">
                <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <a style="">NADCL Community</a>
                </button>
                <ul class="dropdown-menu">
                    <li><a href={{ URL('/players') }} style="text-decoration: red underline">NADCL
                            Players</a></li>
                    <li><a href={{ URL('/Teams') }} style="text-decoration: red underline">NADCL
                            Teams</a></li>
                </ul>
            </div>
        </div>
        <div class="col-auto">
            {{-- <button type="button" class="btn btn-outline-info">
                <a href={{ url('/BigScreen') }} style="text-decoration: none;">Big
                    Screen</a>
            </button> --}}
        </div>
        <div class="col">
            <div class="header_logo">
                <a href="/">
                    <img src="{{ URL('/img/nadcl_logo.png') }}">
                </a>
            </div>
        </div>
        <div class="col-auto">
            <h5 class="center-element">NADCL Player Combine has begun! Watch live on
                <a class="na_red_text hyperlink" href="https://www.youtube.com/@NADCLeague/streams"
                    target="_blank">Youtube</a>
                and
                <a class="na_red_text hyperlink" href="https://www.twitch.tv/NADCLeague" target="_blank"> Twitch</a>
                <div clas="row">
                    Series 1: 6pm EST | Series 2: 9pm EST |
                    Thursday, Friday, and Saturday!
                </div>
        </div>
        <div class="col">
            <div style="display: flex; justify-content: flex-end;">
                <div class="col">
                    <button type="button" class="btn btn-outline-info"> <a
                            href="https://nadcl.us/pages/nadclshop"style="text-decoration: none;">Merch </a>
                    </button>
                </div>
                @if (Route::has('login'))
                    @auth
                        <button type="button" class="btn btn-outline-info">
                            <a href={{ url('/dashboard') }} style="text-decoration: none;">Dashboard</a>
                        </button>
                    @else
                        <button type="button" class="btn btn-outline-info">
                            <a href="{{ route('login') }}" style="text-decoration: none;">Log
                                in</a>
                        </button>
                        @if (Route::has('register'))
                            <button type="button" class="btn btn-outline-info"> <a style="text-decoration: none;"
                                    href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

</div>
