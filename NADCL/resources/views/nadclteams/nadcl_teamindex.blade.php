<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>{{ $data['team']->teamname }}</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/style.css" rel="stylesheet">
</head>

<body class="na_white_text na_blue">
    <div class="main">
        @include('header')
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="card na_altTBG">
                        <p class="card-text text-center">
                            {{ $data['team']->teamname }}
                        </p>
                        {{-- <?php dd($data['tPlayers']); ?> --}}
                        <img style="width:600px;height:400px;" src="{{ URL('/img/team_logos/' . $data['team']->teamlogo) }}">
                        <div class="card-body">
                            <table class="table table-sm na_table">
                                <thead class="na_altTBG">
                                    <tr>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Name</th>
                                        <th schope="col">Position</th>
                                        <th schope="col">SteamID</th>
                                        <th schope="col">MMR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['tPlayers'] as $player)
                                        <tr>
                                            <td>
                                                <img class="header_logo" src="{{ $player->avatarfull }}" alt="">
                                            </td>
                                            <td>
                                                <a class=""
                                                    href="{{ URL('/playercard/' . $player->displayname) }}"><b>{{ $player->displayname }}</b></a>
                                            </td>
                                            <td>
                                                {{ $player->role }}
                                            </td>
                                            <td>
                                                <a class=""
                                                    href="{{ $player->profileurl }}">{{ $player->steamid64 }}</a>
                                            </td>
                                            <td>
                                                {{ $player->mmr }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="container">
                            <div class="row">
                                @if ($data['team']->externalsite)
                                    <div class="col">
                                        <a href="{{ $data['team']->exernalsite }}">External Site</a>
                                    </div>
                                @endif
                                @if ($data['team']->x)
                                    <div class="col-auto">
                                        <a href="https://x.com/"{{ $data['team']->x }} target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                                @if ($data['team']->youtube)
                                    <div class="col-auto">
                                        <a href="https://youtube.com/"{{ $data['team']->youtube }} target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row" style="padding-top:50px;">
                        <h1 class="display-2"><b> {{ $data['team']->teamname }}
                            </b></h1>
                        <p class="h4">
                            {{ $data['team']->about }}
                        </p>
                    </div>
                </div>
            </div>
            @include('/code_injects/footer')
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
