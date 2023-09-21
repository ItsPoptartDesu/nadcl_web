<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>FryBoys</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
</head>

<body class="na_white_text na_blue">
    <div class="main">
        @include('header')
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="card na_altTBG" style="width: 18rem;">
                        <p class="card-text text-center">
                            {{ $data['steam'][0]->realname }}
                        </p>
                        <img class="text-center" style="display:inline;" src="{{ $data['steam'][0]->avatarfull }}">
                        <div class="card-body">
                            <table class="table table-sm na_table">
                                <thead class="na_altTBG">
                                    <span>{{ $data['steam'][0]->realname . ' is from ' . $data['steam'][0]->loccountrycode }}</span>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            SteamID
                                        </td>
                                        <td>
                                            {{ $data['steam'][0]->personaname }}

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            My Siggy is...
                                        </td>
                                        <td>
                                            {{ $data['profile'][0]->siggy }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Number of Combine Games...
                                        </td>
                                        <td>
                                            TBD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Hot take...
                                        </td>
                                        <td>
                                            {{ $data['profile'][0]->hottake }}

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            About
                                        </td>
                                        <td>
                                            {{ $data['profile'][0]->about }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row" style="padding-top:50px;">
                        <h1 class="display-2"><b>We are NADCL</b></h1>
                        <p class="h4">
                            "Catchy slogan"
                        </p>
                    </div>

                </div>
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
