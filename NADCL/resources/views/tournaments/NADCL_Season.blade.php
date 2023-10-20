<!DOCTYPE html>
<html lang="en">

<head>
    <title>NADCL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ URL('css/style.css') }}" rel="stylesheet"><!-- Styles -->
</head>

<body class="bg-gray-100">
    <!-- Sidebar/menu -->
    <nav class="na_sidebar_noBG" style="z-index:3;font-weight:bold;" id="mySidebar"><br>
        <div class="container row na_red_text">
            <h1 style="font-size: 2em">
                <b>NADCL</b>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <a class="row btn btn-danger btn-lg active" href="#">Home</a>
                <a class="row btn btn-danger btn-lg active" href="#participants">Participants</a>
                <a class="row btn btn-danger btn-lg active" href="#bracket">Bracket</a>
            </div>
        </div>
    </nav>

    <!-- !PAGE CONTENT! -->
    <div class="main " style="margin-left:340px; margin-right:40px">
        @include('/code_injects/nadcl_header')
        <div class="row shadow">
            <div class="col-8">
                <div class="" style="margin-bottom:55px;">
                    <div class="py-12 ">
                        <div class="row">
                            <div class="col-auto">
                                <h3 id="#" class="na_red_text display-3 font-semibold leading-tight">
                                    NADCL Season {{ $data['id'] }}</h3>
                            </div>
                            @if ($data['desc']->islive && $data['found'] == null)
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" id="btn-danger">
                                        <a href={{ url('/Tournaments/NADCL_tournamentjoin') }}
                                            class="right-element">Enter Combine</a>
                                    </button>
                                </div>
                            @endif
                        </div>
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
                                <h5 class="h5 text-center"style="padding-top:10px;">${{ $data['desc']->prizepool }} USD
                                    are
                                    spread among the
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
                                                <td colspan="2">TBD</td>
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
            </div>
            <!-- right side bar info -->
            <div class="col-4">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2 ">
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
                                            {{ $data['desc']->seriesname }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Organizer:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->organizer }}
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
                                            {{ $data['desc']->server }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Type:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->type }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Location:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->location }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Format:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->format }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            PrizePool:
                                        </div>
                                        <div class="col">
                                            ${{ $data['desc']->prizepool }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Start Date:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->startdate }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            End Date:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->enddate }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_altTBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Version:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->version }}
                                        </div>
                                    </div>
                                </li>
                                <li class="na_TBG list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            Teams:
                                        </div>
                                        <div class="col">
                                            {{ $data['desc']->numteams }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row shadow" id="participants" style="margin-top:55px; margin-bottom:55px;">
            <div class="col">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active na_blue btn-outline-primary" id="teams-tab"
                            data-bs-toggle="tab" data-bs-target="#teams" type="button" role="tab"
                            aria-controls="teams" aria-selected="true">
                            Teams: We Want You!
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link na_blue btn-outline-primary" id="entries-tab" data-bs-toggle="tab"
                            data-bs-target="#entries" type="button" role="tab" aria-controls="entries"
                            aria-selected="false">Entries</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="teams" role="tabpanel"
                        aria-labelledby="teams-tab">
                        <div class="py-12">
                            <div class="container"style="padding-top:5px;">
                                <div class="row">
                                    <!--Astornaut Esports -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>This is your vibe, no cap</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--Bullish On Gaming -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>low-key obsessed with your potential</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--FryBoys -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>Stop cookin, come eat</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--GRIN Esports -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>Your skills are what we are seeking</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--Paladins -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>Hear that? Its Opportunity Knocking</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--SporkFace Killas -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>Interested in you!</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--The honored vanguard -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>We want you!</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                    <!--Trash Knighs Online -->
                                    <div class="card na_altTBG" style="width: 18rem;">
                                        <p class="card-text text-center">
                                            <b>This could be you!</b>
                                        </p>
                                        <img src="{{ URL('/img/we_want_you.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="entries" role="tabpanel" aria-labelledby="entries-tab">
                <table class="table table-sm na_table"style="width:50%; margin:auto;">
                    <thead>
                        <tr>
                            <th scope="col">NADCL Username</th>
                            <th scope="col">PersonaName</th>
                            <th scope="col">MMR</th>
                            <th scope="col">Role</th>
                            <th scope="col">Can Captain?</th>
                            <th scope="col">Steam Profile</th>
                            <th scope="col">SteamID</th>
                            <th scope="col">Siggy</th>
                            <th scope="col">From</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data['entries'] != null)
                            @foreach ($data['entries'] as $entry)
                                <tr>
                                    <td scope="row"><a class="na_red_text"
                                            href="{{ URL('/playercard/' . $entry->displayname) }}">{{ $entry->displayname }}</a>
                                    </td>
                                    <td>{{ $entry->personaname }}</td>
                                    <td>{{ $entry->mmr }}</td>
                                    <td>{{ $entry->role }}</td>
                                    <td>{{ $entry->cancaptain }}</td>
                                    <td><a class="na_red_text" target="_blank" href={{ $entry->profileurl }}>Steam
                                            Profile Link</a></td>
                                    <td>{{ $entry->steamid64 }}</td>
                                    <td>{{ $entry->siggy }}</td>
                                    <td>{{ $entry->locstatecode }} - {{ $entry->loccountrycode }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row shadow">
            <h6 class="na_red_text display-6 font-semibold leading-tight">
                Bracket</h6>
            <hr id="bracket"style="width:100%;border:5px solid red">
            @include('/code_injects/nadcl_bracket')
        </div>
        <!-- Bracket -->

        @include('/code_injects/footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
