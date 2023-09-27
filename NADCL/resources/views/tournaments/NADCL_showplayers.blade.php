<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NADCL Players</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
</head>

<body class="na_white_text na_blue">
    <div class="main">
        @include('header')
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Headshot</th>
                        <th scope="col">NADCL Name</th>
                        <th scope="col">Steam Name</th>
                        <th scope="col">Siggy</th>
                        <th scope="col">MMR</th>
                        <th scope="col">Steam Profile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['tProfile'] as $player)
                        <tr>
                            <th scope="row"><img class='header_logo' src={{ $player->avatarfull }}
                                    style="margin:0px;"></th>
                            <td><a class="na_red_text"
                                    href="{{ URL('/players/' . $player->displayname) }}">{{ $player->displayname }}</a>
                            </td>
                            <td>{{ $player->personaname }}</td>
                            <td>{{ $player->siggy }}</td>
                            <td>{{ $player->mmr }}</td>
                            <td><a class="na_red_text" href={{ $player->profileurl }}>Steam Profile</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('/footer')
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
