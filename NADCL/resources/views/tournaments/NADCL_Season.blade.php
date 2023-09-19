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
    <link rel="stylesheet" href="{{ URL('css/style.css') }}" rel="stylesheet"><!-- Styles -->
</head>

<body class="na_white_text na_blue">
    <!-- Sidebar/menu -->
    <nav class="na_sidebar_noBG" style="z-index:3;font-weight:bold;" id="mySidebar"><br>
        <div class="container row na_red_text">
            <h1 style="font-size: 2em">
                <b>NADCL</b>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <a class="row btn btn-primary btn-lg active" href="#">Home</a>
                <a class="row btn btn-primary btn-lg active" href="#Teams">Teams</a>
            </div>
        </div>
    </nav>

    <!-- !PAGE CONTENT! -->
    <div class="main " style="margin-left:340px; margin-right:40px">
        @include('header')
        <div class="row">
            <div class="col-8">
                <div class="py-12">
                    <h3 id="#" class="na_red_text display-3 font-semibold leading-tight">
                        NADCL Season {{ $id }}</h3>
                    <hr style="width:100%;border:2px solid red">
                </div>
                <div class="py-12">
                    <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                        Format</h6>
                    <hr style="width:100%;border:2px solid red">
                    <ul>
                        <li>Eight teams in double-eliminiation bracket</li>
                        <li>Grand final is Bo5</li>
                        <li>All other matches are Bo3</li>
                    </ul>
                </div>
                <!-- PRIZE POOL -->
                <div class="py-12">
                    <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                        Prize Pool</h6>
                    <hr style="width:100%;border:2px solid red">
                    <div class="container" style="padding-top:5px;width:80%;">
                        <div class="card na_TBG">
                            <h5 class="h5 text-center"style="padding-top:10px;">$2,000 USD are spread among the
                                participants as seen below:</h5>
                            <div class="card-body">
                                <table class="table table-sm na_table"style="width:50%; margin:auto;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Place</th>
                                            <th scope="col">Prize</th>
                                            <th scope="col">Participant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1st</th>
                                            <td>$1,000</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2nd</th>
                                            <td>$500</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3rd</th>
                                            <td>$250</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4th</th>
                                            <td>$250</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">5th - 6th</th>
                                            <td>-</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>TBD</td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">7th - 8th</th>
                                            <td>-</td>
                                            <td colspan="2">Bullish On Gaming</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>TBD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right side bar info -->
            <div class="col-4">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <div class="card na_TBG" style="max-width: 18rem;">
                            <div class="card-header">North American Dota 2 Challengers League</div>
                            <img class="header_logo" src="{{ URL('/img/nadcl_logo.png') }}">
                            <div class="card-body">
                                <h5 class="card-title"><b>League Information</b></h5>
                                <p class="card-text">

                                </p>
                            </div>
                            <ul class="list-group na_tournyListGroup">
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Series:
                                        </div>
                                        <div class="col">
                                            North American Dota 2 Challengers League
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Organizer:
                                        </div>
                                        <div class="col">
                                            NADCL
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Sponsors:
                                        </div>
                                        <div class="col">
                                            GamerGains
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Server:
                                        </div>
                                        <div class="col">
                                            Us East
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Type:
                                        </div>
                                        <div class="col">
                                            Online
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Location:
                                        </div>
                                        <div class="col">
                                            North America
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Format:
                                        </div>
                                        <div class="col">
                                            Double-Eliminiation
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            PrizePool:
                                        </div>
                                        <div class="col">
                                            $2,000 USD
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Start Date:
                                        </div>
                                        <div class="col">
                                            20-23-09-14
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            End Date:
                                        </div>
                                        <div class="col">
                                            20-23-09-24
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Version:
                                        </div>
                                        <div class="col">
                                            7.34
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Teams:
                                        </div>
                                        <div class="col">
                                            8
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Participants -->
            <div class="row">
                <div class="col">
                    <div class="py-12">
                        <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                            Participants</h6>
                        <hr style="width:100%;border:2px solid red">
                        <div class="container"style="padding-top:5px;">
                            <div class="row">
                                <!--Astornaut Esports -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        Astronaut Esports
                                    </p>
                                    <a href="{{ url('/astronaut') }}">
                                        <img src="{{ URL('/img/team_logos/astronauts.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        RohofireFlu
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Double King
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        rook62
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Blueberry Beagle
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Bokey
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Just_mada
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Bullish On Gaming -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        Bullish On Gaming
                                    </p>
                                    <a href="{{ url('/bullish') }}">
                                        <img src="{{ URL('/img/team_logos/bullish.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Flee
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Ush
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Tricepz
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Xeriscape
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Skyward
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        breabrea
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--FryBoys -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        FryBoys
                                    </p>
                                    <a href="{{ url('/fryboys') }}">
                                        <img src="{{ URL('/img/team_logos/FryBoys.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Gunga ginga
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Pingu
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        ReM
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        LGTK
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Moozy
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Bungus
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--GRIN Esports -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        GRIN Esports
                                    </p>
                                    <a href="{{ url('/grin') }}">
                                        <img src="{{ URL('/img/team_logos/grin.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        szabo666
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Dave
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Save
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Alrenaaron
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Aeon
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        giantpoll
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Paladins -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        Paladins
                                    </p>
                                    <a href="{{ url('/paladins') }}">
                                        <img src="{{ URL('/img/team_logos/paladins.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Pichu
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Chives
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Destiny
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Zore
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        psibladegod
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        peymonyo
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--SporkFace Killas -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        SporkFace Killas
                                    </p>
                                    <a href="{{ url('/sporkface') }}">
                                        <img src="{{ URL('/img/team_logos/sporkface.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Theyna
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        babybkid
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Karaphael
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        doorflaug
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Scourgemcduck
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        vico
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--The honored vanguard -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        SporkFace Killas
                                    </p>
                                    <a href="{{ url('/thv') }}">
                                        <img src="{{ URL('/img/team_logos/thv.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Vol
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        BGod
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        _lil_nick
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        thesillysnail
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        dogical
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Kong_wedge
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Trash Knighs Online -->
                                <div class="card na_altTBG" style="width: 18rem;">
                                    <p class="card-text text-center">
                                        SporkFace Killas
                                    </p>
                                    <a href="{{ url('/tko') }}">
                                        <img src="{{ URL('/img/team_logos/tko.png') }}">
                                    </a>
                                    <div class="card-body">
                                        <table class="table table-sm na_table">
                                            <thead class="na_altTBG">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        WakeMeUp
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        AlienManaBanana
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        High_Shaggy
                                                    </td>
                                                    <td>
                                                        5
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Froogoss
                                                    </td>
                                                    <td>
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Leem
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Nyaalobby
                                                    </td>
                                                    <td>
                                                        Sub
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h6 id="#" class="na_red_text display-6 font-semibold leading-tight">
                    Bracket</h6>
                <hr style="width:100%;border:2px solid red">
                <div class="container"style="padding-top:5px;">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="row"style="padding-top:15px;">
                                <span class="border border-primary rounded na_altTBG"><b>UB Quarter Finals</b></span>
                            </div>
                            <div class="row"style="padding-top:15px;">
                                <span class="border border-primary rounded">Bullish On Gaming</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>Trash Knights Online</b></span>
                            </div>
                            <div class="row" style="padding-top:15px;">
                                <span class="border border-primary rounded">Astronaut Esports </span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>SporkFace Killas</b></span>
                            </div>
                            <div class="row" style="padding-top:15px;">
                                <span class="border border-primary rounded">GRIN Esports</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>The Honored Vanguard</b></span>
                            </div>
                            <div class="row" style="padding-top:15px;">
                                <span class="border border-primary rounded"><b>Fryboys</b></span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded">Paladins</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row"style="padding-top:15px;">
                                <span class="na_altTBG border border-primary rounded"><b>UB Semi Finals</b></span>
                            </div>
                            <div class="row"style="padding-top:45px;">
                                <span class="border border-primary rounded">Bullish On Gaming</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>Sporkface Killas</b></span>
                            </div>
                            <div class="row" style="padding-top:80px;">
                                <span class="border border-primary rounded">The Honored Vanguard</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>SporkFace Killas</b></span>
                            </div>
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                            <div class="row"style="padding-top:15px;">
                                <span class="na_altTBG border border-primary rounded"><b>UB Finals</b></span>
                            </div>
                            <div class="row"style="padding-top:110px;">
                                <span class="border border-primary rounded">Sporkface Killas</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded">FryBoys</span>
                            </div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <!-- GRAND FINALS -->
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                            <div class="row"style="padding-top:15px;">
                                <span class="na_altTBG border border-primary rounded"><b>Grand Finals</b></span>
                            </div>
                            <div class="row"style="padding-top:15px;">
                                <span class="border border-primary rounded">TBD</span>
                            </div>
                            <div class="row">
                                <span class="border border-primary rounded"><b>TBD</b></span>
                            </div>
                        </div>
                        <!-- LOWER BRACKET -->
                        <div class="row">
                            <div class="col-md-auto">
                                <div class="row"style="padding-top:15px;">
                                    <span class="border border-primary rounded na_altTBG"><b>Lower Bracket Round
                                            1</b></span>
                                </div>
                                <div class="row"style="padding-top:85px;">
                                    <span class="border border-primary rounded">Bullish On Gaming</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded"><b>Trash Knights Online</b></span>
                                </div>
                                <div class="row" style="padding-top:15px;">
                                    <span class="border border-primary rounded">GRIN Esports</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded"><b>Paladins</b></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row"style="padding-top:15px;">
                                    <span class="na_altTBG border border-primary rounded"><b>Lower Bracket Round
                                            2</b></span>
                                </div>
                                <div class="row"style="padding-top:45px; padding-left:25px;"">
                                    <span class="border border-primary rounded">The Honored Vanguard</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded">Astronaut Esports</span>
                                </div>
                                <div class="row" style="padding-top:20px; padding-left:25px;">
                                    <span class="border border-primary rounded">Trash Knights Online</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded"><b>TBD</b></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row"style="padding-top:15px;">
                                    <span class="na_altTBG border border-primary rounded"><b>Lower Bracket Semi
                                            Finals</b></span>
                                </div>
                                <div class="row"style="padding-top:80px;">
                                    <span class="border border-primary rounded">TBD</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded">TBD</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row"style="padding-top:15px;">
                                    <span class="na_altTBG border border-primary rounded"><b>Lower Bracket
                                            Finals</b></span>
                                </div>
                                <div class="row"style="padding-top:45px; padding-left:25px;">
                                    <span class="border border-primary rounded">TBD</span>
                                </div>
                                <div class="row">
                                    <span class="border border-primary rounded"><b>TBD</b></span>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
