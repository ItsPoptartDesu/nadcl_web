<div class="container" style="padding-top: 10px;">
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Crimson Witnesses + NADCL @ TI12 </strong> <a class="na_red_text hyperlink"
            href="https://www.eventbrite.ie/e/crimson-witnesses-ti12-finals-party-featuring-nadcl-turbo-mode-tickets-657850286917"
            class="alert-link">Get your tickets NOW!</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div clas="row">
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
    </h5>
    <div class="row">
        <div class="col">
            <div class="dropdown show">
                <div style="display: flex; justify-content: flex-start;">
                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <a style=""">Tournaments</a>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ URL('/Tournaments/NADCL_Season/4') }}">Season 4</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="btn btn-outline-info"> <a
                        href="https://nadcl.us/pages/nadclshop"style="text-decoration: none;">Merch </a>
                </button>
                @if (Route::has('login'))
                    @auth
                        <button type="button" class="btn btn-outline-info">
                            <a href={{ url('/dashboard') }}
                                class="right-element"style="text-decoration: none;">Dashboard</a>
                        </button>
                    @else
                        <button type="button" class="btn btn-outline-info">
                            <a href="{{ route('login') }}" class="right-element"style="text-decoration: none;">Log in</a>
                        </button>
                        @if (Route::has('register'))
                            <button type="button" class="btn btn-outline-info"> <a style="text-decoration: none;"
                                    href="{{ route('register') }}" class="right-element">Register</a></button>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
    <div class="header_logo">
        <a href="/">
            <img src="{{ URL('/img/nadcl_logo.png') }}">
        </a>
    </div>
</div>
