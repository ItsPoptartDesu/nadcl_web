<x-app-layout>

    <!-- Sidebar/menu -->
    <nav class="na_sidebar " style="z-index:3;font-weight:bold;" id="mySidebar"><br>
        <div class="container row na_red_text">
            <h1 style="font-size: 2.5em">
                <b>NADCL</b>
                <hr style="width:100%;border:5px solid  red ">
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <a class="row btn" href="#"><img src="{{ asset('/img/pages/home_title.png') }}"></a>
                <a class="row btn" href="#Teams"><img src="{{ asset('/img/pages/teams_title.png') }}"></a>
                <a class="row btn" href="#sponsors"><img src="{{ asset('/img/pages/sponsors_title.png') }}"></a>
                <a class="row btn" href="#youtube"><img src="{{ asset('/img/pages/youtube_title.png') }}"></a>
                <a class="row btn" href="#tiktok"><img src="{{ asset('/img/pages/tiktok_title.png') }}"></a>
                <a class="row btn" href="#schedule"><img src="{{ asset('/img/pages/schedule_title.png') }}"></a>
                <a class="row btn" href="#bracket"><img src="{{ asset('/img/pages/bracket_title.png') }}"></a>
            </div>
        </div>
    </nav>
    <!-- !PAGE CONTENT! -->
    <div class="main " style="margin-left:340px; margin-right:40px">
        @include('/code_injects/nadcl_header')
        <!-- Teams -->
        <div class="container na_red_text shadow" style="padding-top:20px; margin-top:20px;"id="Teams">
            <h1 class="text-center">
                <div class="jumbotron">
                    <h1 class="display-1">North American Dota 2 Challenger's League</h1>
            </h1>
        </div>
        <div class="container na_red_text shadow"style="padding-top:20px; margin-top:20px;">
            <h2 style="font-size: 2em"><b>Our Season 4 Teams</b></h2>
            <hr style="width:100%;border:5px solid red ">
            @include('code_injects/season4teams')
        </div>
        <!-- Sponsors -->
        <div class="container na_red_text shadow" style="padding-top:20px; margin-top:20px;">
            <h1 style="font-size: 2em">
                <b id="sponsors">Our Sponsors</b>
            </h1>
            <hr style="margin-bottom:7px;width:100%;border:5px solid red">
            <div class="row">
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;">
                        <img class="card-img-top" src="{{ URL('/img/we_want_you.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>We Want You</b></h5>
                            <p class="card-text na_black_text">...to become a Web3 Supporter!</p>
                            <a href="https://exchange.art/nadcl/nfts" class="btn btn-danger" style="width:100%;"
                                target="_blank">Season 4 Pass</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;">
                        <img class="card-img-top" src="{{ URL('/img/gg_logo.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>Gamer Gains</b></h5>
                            <p class="card-text na_black_text">An easy to use, non intrusive,
                                Dota 2 app that runs in the background while you play. Gamer Gains has daily
                                challengers
                                to complete along with contests.</p>
                            <a href="https://gamergains.com/games/dota2/challenges" class="btn btn-danger"
                                style="width:100%;" target="_blank">Dota 2 Challenges</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;">
                        <img class="card-img-top" src="{{ URL('/img/we_want_you.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>We Want You</b></h5>
                            <p class="card-text na_black_text">...to become a Team Supporter!</p>
                            <a href="{{ URL('/Teams') }}" class="btn btn-danger" style="width:100%;"
                                target="_blank">Join A Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Youtube -->
        <div class="container na_red_text shadow" style="padding-top:20px; margin-top:20px;" id="youtube">
            <h1 style="font-size: 2em">
                <b>YouTube</b>
            </h1>
            <hr style="margin-bottom:7px;width:100%;border:5px solid red">
            <div class="row">
                <div class="col-sm">
                    <!-- Youtube Carousel -->
                    <div id="youtubeCarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="{{ $data['youtube'][0] }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Tidebringer Podcast</h5>
                                    <p>Episode 3: Xeriscape and Hatlord</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="{{ $data['youtube'][1] }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Tidebringer Podcast</h5>
                                    <p>Episode 2: PPD and Skyward</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="{{ $data['youtube'][2] }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Tidebringer Podcast</h5>
                                    <p>Episode 1: AMB and NonStopGrief</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#youtubeCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#youtubeCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- TikTok -->
        <div class="container na_red_text shadow" style="padding-top:20px; margin-top:20px;" id="tiktok"
            style="margin-top:75px">
            <h1 style="font-size: 2em"><b>TikTok</b></h1>
            <hr style="width:100%;border:5px solid red">
            <div class="row">
                <div class="col-sm">
                    <!-- TikTok Carousel -->
                    <div id="tiktokCarsousel" class="carousel slide" data-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#tiktokCarsousel" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#tiktokCarsousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#tiktokCarsousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100" alt="...">
                                    <blockquote class="tiktok-embed"
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/"{{ $data['tiktok'][0] }}
                                        data-video-id={{ $data['tiktok'][0] }}
                                        style="max-width: 605px;min-width: 325px;">
                                        <section>
                                            <a target="_blank"
                                                title="@nadotachallengersleague"href="https://www.tiktok.com/@nadotachallengersleague?refer=embed">@nadotachallengersleague
                                            </a>
                                        </section>
                                    </blockquote>
                                    <script async src="https://www.tiktok.com/embed.js"></script>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <blockquote class="tiktok-embed"
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/"{{ $data['tiktok'][1] }}
                                        data-video-id={{ $data['tiktok'][1] }}
                                        style="max-width: 605px;min-width: 325px;">
                                        <section> <a target="_blank" title="@nadotachallengersleague"
                                                href="https://www.tiktok.com/@nadotachallengersleague?refer=embed">@nadotachallengersleague</a>
                                        </section>
                                    </blockquote>
                                    <script async src="https://www.tiktok.com/embed.js"></script>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <blockquote class="tiktok-embed"
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/"{{ $data['tiktok'][2] }}
                                        data-video-id={{ $data['tiktok'][2] }}
                                        style="max-width: 605px;min-width: 325px;">
                                        <section>
                                            <a target="_blank" title="@nadotachallengersleague"
                                                href="https://www.tiktok.com/@nadotachallengersleague?refer=embed">@nadotachallengersleague</a>
                                        </section>
                                    </blockquote>
                                    <script async src="https://www.tiktok.com/embed.js"></script>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#tiktokCarsousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"style="background-color:red"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#tiktokCarsousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" style="background-color:red"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule -->
        <div class="container na_white_text shadow" style="padding-top:20px; margin-top:20px;" id="schedule"
            style="margin-top:75px">
            <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                Schedule</h6>

            <hr style="width:100%;border:5px solid red">
            <img class="grid_item" src="{{ URL('/img/schedule2.png') }}">
            <!-- Bracket -->

        </div>
        <div class="container shadow" style="padding-top:20px; margin-top:20px;">
            <div class="container" id="bracket">
                <h6 id="bracket" class="na_red_text display-6 font-semibold leading-tight">
                    Bracket</h6>
                <hr style="width:100%;border:5px solid red">
                @include('/code_injects/nadcl_bracket')
            </div>
        </div>
        <div class="text-center" style="padding-top:25px;">
            <h2 style="font-size: 2em">Season 4</h2>
            <br>
            <h4 style="font-size: 2em">Thursday: 6 & 9 PM Eastern Time</h4>
            <br>
            <h4 style="font-size: 2em">Friday: 6 & 9 PM Eastern Time</h4>
            <br>
            <h4 style="font-size: 2em">Saturday: 3, 6, & 9 PM Eastern Time</h4>
        </div>
</x-app-layout>
