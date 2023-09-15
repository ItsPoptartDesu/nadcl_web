<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">

    <title>Sporkface Killas</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<html>

    <body class="na_white_text na_blue">
        <div class="main " style="margin-left:340px; margin-right:40px">
            @include('header')
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <img class="grid_item" src="{{ URL('/img/team_logos/sporkface.png') }}">
                    </div>
                    <div class="col-lg">
                        <div class="row" style="padding-top:50px;">
                            <h2 class="display-2">Sporkface Killas</h2>
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
