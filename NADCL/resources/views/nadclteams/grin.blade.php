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

    <title>GRIN Esports</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <body class="na_white_text na_blue">
        <div class="main " style="margin-left:340px; margin-right:40px">
            @include('header')
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <img class="grid_item" src="{{ URL('/img/team_logos/grin.png') }}">
                    </div>
                    <div class="col-lg">
                        <div class="row" style="padding-top:50px;">
                            <h2>GRIN Esports</h2>
                            <p>Grin Esports, an esteemed DOTA2 organization, has recently gained attention
                                for their challenging journey in the NA DPC Division II, where they faced a
                                series of unfortunate defeats resulting in a 0-7 record. However, true
                                champions are defined by their resilience and ability to bounce back from
                                adversity.
                            </p>
                            <p>Despite the tough start, Grin Esports remains undeterred, using their recent
                                performance as a catalyst for growth and improvement. With a determined
                                spirit and a burning desire to prove themselves, the team is determined to
                                turn their fortunes around and showcase their true potential in the NADCL.
                            </p>
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
