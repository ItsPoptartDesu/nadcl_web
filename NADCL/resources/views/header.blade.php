<div class="container">
    <h5 class="center-element">NADCL Player Combine has begun! Watch live at twitch.tv/nadcleague 6 pm - 10
        pm EST Thursday, Friday, and Saturday!</h5>
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
