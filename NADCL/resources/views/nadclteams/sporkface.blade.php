<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sporkface Killas</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
</head>

<html>

<body class="bg-gray-100">
    <div class="main">
        @include('/code_injects/nadcl_header')
        <div class="container">
            <div class="row">
                <div class="col-auto">
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
                </div>
                <div class="col container shadow">
                    <div class="row" style="padding-top:50px;">
                        <h2 class="display-2 text-center">Sporkface Killas</h2>
                        <div class="h4 html-formatter html-formatter--center">
                            <p style="text-align:left;">
                                <span>Introducing the Sporkface Killas, a formidable force
                                    in the North American Dota Challengers League (NADCL).
                                </span>
                            </p>
                            <p style="text-align:left;">
                                <span>Inspired by Forky himself. The character's wide eyes
                                    reflect the team's ceaseless curiosity and hunger for innovation, while its
                                    defiant stance symbolizes their unyielding perseverance and tenacity in every
                                    tournament.
                                </span>
                            </p>
                            <p style="text-align:left;">
                                <span>Sporkface Killas is not just a team—it's a vibrant
                                    gaming community where everyone's contributions are valued, and victory is a
                                    shared success. And it's this energy that they bring to every NADCL match,
                                    uniting their fans, their community, and the world of competitive gaming.
                                </span>
                            </p>
                        </div>
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
