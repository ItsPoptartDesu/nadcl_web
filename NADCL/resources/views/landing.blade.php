<!DOCTYPE html>
<html lang="en">
<?php
$videoURL1 = 'https://www.youtube.com/watch?v=cFBWl1lefQI';
$videoURL2 = 'https://www.youtube.com/watch?v=8DFjoiDQmyk';
$videoURL3 = 'https://www.youtube.com/watch?v=jOmmH1z-SfU';
//"https://www.youtube.com/embed/cFBWl1lefQI?si=KKa5CpyK_gD63yjA"
$video1 = str_replace('watch?v', 'embed/', $videoURL1);
$video2 = str_replace('watch?v', 'embed/', $videoURL2);
$video3 = str_replace('watch?v', 'embed/', $videoURL3);
?>

<head>
    <title>NADCL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>

<body class="na_white_text na_blue">
    <!-- Sidebar/menu -->
    <nav class="na-sidebar " style="z-index:3;font-weight:bold;" id="mySidebar"><br>
        <div class="container row na_red_text">
            <h1 style="font-size: 2em">
                <b>NADCL</b>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <a class="row btn btn-primary btn-lg active" href="#">Home</a>
                <a class="row btn btn-primary btn-lg active" href="#Teams">Teams</a>
                <a class="row btn btn-primary btn-lg active" href="#sponsors">Sponsors</a>
                <a class="row btn btn-primary btn-lg active" href="#youtube">Youtube</a>
                <a class="row btn btn-primary btn-lg active" href="#tiktok">TikTok</a>
                <a class="row btn btn-primary btn-lg active" href="#schedule">Schedule</a>
                <a class="row btn btn-primary btn-lg active" href="#bracket">Bracket</a>
            </div>
        </div>
    </nav>
    <!-- !PAGE CONTENT! -->
    <div class="main " style="margin-left:340px; margin-right:40px">
        @include('header')
        <!-- Teams -->
        <div class="container na_red_text" id="Teams">
            <h1 class="text-center">
                <div class="jumbotron na_blue">
                    <h1 class="display-4">North American Dota 2 Challenger's League</h1>
            </h1>
            <h2 style="font-size: 2em"><b>Our Teams</b></h2>
            <hr style="width:130px;border:5px solid red">
        </div>

        <!-- Team Photos -->
        <div id="test" class="grid-container">
            <a href="{{ url('/astronaut') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/astronauts.png') }}">
            </a>
            <a href="{{ url('/bullish') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/bullish.png') }}">
            </a>
            <a href="{{ url('/fryboys') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/fryboys.png') }}">
            </a>
            <a href="{{ url('/grin') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/grin.png') }}">
            </a>
            <a href="{{ url('/paladins') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/paladins.png') }}">
            </a>
            <a href="{{ url('/sporkface') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/sporkface.png') }}">
            </a>
            <a href="{{ url('/thv') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/thv.png') }}">
            </a>
            <a href="{{ url('/tko') }}">
                <img class="grid_item" src="{{ URL('/img/team_logos/tko.png') }}">
            </a>
        </div>
        <br>
        <br>
        <br>
        <!-- Sponsors -->
        <div class="container na_red_text">
            <h1 style="font-size: 2em">
                <b id="sponsors">Our Sponsors</b>
            </h1>

            <hr style="width:165px;border:5px solid red">
            <div class="row">
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;--bs-card-bg: none;">
                        <img class="card-img-top" src="{{ URL('/img/we_want_you.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>We Want You</b></h5>
                            <p class="card-text">...to become a Web3 Supporter!</p>
                            <a href="https://exchange.art/nadcl/nfts" class="btn btn-primary" style="width:100%;"
                                target="_blank">Season 4 Pass</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;--bs-card-bg: none;">
                        <img class="card-img-top" src="{{ URL('/img/gg_logo.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>Gamer Gains</b></h5>
                            <p class="card-text">An easy to use, non intrusive,
                                Dota 2 app that runs in the background while you play. Gamer Gains has daily challengers
                                to complete along with contests.</p>
                            <a href="https://gamergains.com/games/dota2/challenges" class="btn btn-primary"
                                style="width:100%;" target="_blank">Dota 2 Challenges</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card na_white_text" style="width: 18rem;--bs-card-bg: none;">
                        <img class="card-img-top" src="{{ URL('/img/we_want_you.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title na_red_text"><b>We Want You</b></h5>
                            <p class="card-text">...to become a Team Supporter!</p>
                            <a href="https://nadcl.us/pages/supporters" class="btn btn-primary" style="width:100%;"
                                target="_blank">Join A Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Youtube -->
        <div class="container na_red_text" id="youtube">
            <h1 style="font-size: 2em">
                <b>Youtube</b>
            </h1>
            <hr style="width:123px;border:5px solid red">
            <div class="row">
                <div class="col-sm">
                    <!-- Youtube Carousel -->
                    <div id="youtubeCarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#youtubeCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="<?php echo $video1; ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="<?php echo $video2; ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" alt="...">
                                    <iframe width="100%" height="480" src="<?php echo $video3; ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="font-size: 2em">Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
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
        <div class="container na_red_text" id="tiktok" style="margin-top:75px">
            <h1 style="font-size: 2em"><b>TikTok</b></h1>
            <hr style="width:98px;border:5px solid red">
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
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/7276485795760950570"
                                        data-video-id="7276485795760950570"
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
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/7269875187913329962"
                                        data-video-id="7269875187913329962"
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
                                        cite="https://www.tiktok.com/@nadotachallengersleague/video/7269058694548081963"
                                        data-video-id="7269058694548081963"
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
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#tiktokCarsousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="na_white_text">
                <h5 style="font-size: 2em">Details about the the editors</h5>
            </div>
        </div>

        <!-- Schedule -->
        <div class="container na_white_text" id="schedule" style="margin-top:75px">
            <img class="grid_item" src="{{ URL('/img/schedule.png') }}">
            <!-- Bracket -->
            <div id="bracket">
                @include('bracket')
            </div>
            <div class="text-center">
                <h2 style="font-size: 2em">Season 4</h2>
                <br>
                <h4 style="font-size: 2em">Thursday: 6 & 9 PM Eastern Time</h4>
                <br>
                <h4 style="font-size: 2em">Friday: 6 & 9 PM Eastern Time</h4>
                <br>
                <h4 style="font-size: 2em">Saturday: 3, 6, & 9 PM Eastern Time</h4>
            </div>
        </div>
        <!-- End page content -->
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p class="text-center">Powered by Our Supporters</a></p>
                </div>
                <div class="col-md-auto">
                    <div class="row">
                        <a href="https://discord.gg/nadcl" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                <path
                                    d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="row">
                        <a href="https://x.com/NADCL_S4" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="row">
                        <a href="https://youtube.com/@NADCLeague" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </a>
                    </div>
                    <div class="row">
                        <a href="https://twitch.tv/NADCLeague" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                                <path
                                    d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z" />
                                <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="row">
                        <a href="https://www.tiktok.com/@nadotachallengersleague" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path
                                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
