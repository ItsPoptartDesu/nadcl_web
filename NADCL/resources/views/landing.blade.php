<!DOCTYPE html>
<html lang="en">

<head>
    <title>NADCL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
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
                    <h1 class="display-1">North American Dota 2 Challenger's League</h1>
            </h1>
            <h2 style="font-size: 2em"><b>Our Season 4 Teams</b></h2>
            <hr style="width:100%;border:5px solid red">
        </div>
        <!-- Team Photos -->
        @include('code_injects/season4teams')
        <br>
        <br>
        <br>
        <!-- Sponsors -->
        <div class="container na_red_text">
            <h1 style="font-size: 2em">
                <b id="sponsors">Our Sponsors</b>
            </h1>

            <hr style="width:100%;border:5px solid red">
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
            <hr style="width:100%;border:5px solid red">
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
                                    <iframe width="100%" height="480" src="<?php echo $data['youtube'][0]; ?>"
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
                                    <iframe width="100%" height="480" src="<?php echo $data['youtube'][1]; ?>"
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
                                    <iframe width="100%" height="480" src="<?php echo $data['youtube'][2]; ?>"
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
        </div>

        <!-- Schedule -->
        <div class="container na_white_text" id="schedule" style="margin-top:75px">
            <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                Schedule</h6>

            <hr style="width:100%;border:5px solid red">
            <img class="grid_item" src="{{ URL('/img/schedule.png') }}">
            <!-- Bracket -->
            <div id="bracket">
                @include('na_bracket')
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
        @include('footer')
        {{-- </div> --}}
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
