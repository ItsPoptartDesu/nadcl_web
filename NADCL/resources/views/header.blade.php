<div class="container">
    <div clas="row">
        <h5 class="center-element">NADCL Player Combine has begun! Watch live on
            <a class="na_red_text hyperlink" href="https://www.youtube.com/@NADCLeague/streams" target="_blank">Youtube</a>
            and
            <a class="na_red_text hyperlink" href="https://www.twitch.tv/NADCLeague" target="_blank"> Twitch</a>
            <div clas="row">
                Series 1: 6pm EST | Series 2: 9pm EST |
                Thursday, Friday, and Saturday!
            </div>
    </div>
    </h5>
    <div style="display: flex; justify-content: flex-start;">
        <button type="button" class="btn btn-outline-info dropdown-toggle"data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <a style="color:#0062cc; text-decoration: none;">Tournaments</a>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ URL('Tournaments/NADCL_Season/4') }}">Season 4</a>
        </div>
    </div>
    <div style="display: flex; justify-content: flex-end;">
        <button type="button" class="btn btn-outline-info"> <a style="color:#0062cc; text-decoration: none;"
                href="https://nadcl.us/pages/nadclshop">Merch </a>
        </button>
        @if (Route::has('login'))
            @auth
                <button type="button" class="btn btn-outline-info">
                    <a href={{ url('/dashboard') }} class="right-element">Dashboard</a>
                </button>
            @else
                <button type="button" class="btn btn-outline-info">
                    <a style="color:#0062cc; text-decoration: none;" class="right-element" href="{{ route('login') }}">
                        Log in
                    </a>
                </button>
                @if (Route::has('register'))
                    <button type="button" class="btn btn-outline-info"> <a style="color:#0062cc; text-decoration: none;"
                            href="{{ route('register') }}" class="right-element">Register</a></button>
                @endif
            @endauth
        @endif
    </div>
    <a href="/">
        <img class="header_logo" src="{{ URL('/img/nadcl_logo.png') }}">
    </a>
</div>
