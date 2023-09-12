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

    <title>Astronaut Esports</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <body class="na_white_text na_blue">
        <div class="main " style="margin-left:340px; margin-right:40px">
            @include("header")
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <img class="grid_item" src="{{ URL('/img/team_logos/astronauts.png') }}">
                    </div>
                    <div class="col-lg">
                        <div class="row" style="padding-top:50px;">
                            <h2>Astronaut Esports!</h2>
                            <ul>
                                <li>
                                    <span><a class="na_red_text hyperlink" href="https://astronautesports.com/"
                                            rel="noopener" target="_blank">Astronaut Esports</a> is embarking on a new
                                        journey, setting
                                        our sights on winning the NADCL title with rocket-fueled
                                        dominance&nbsp;<br></span>
                                </li>
                                <li>
                                    <span>Founded in 2023, our mission in the NADCL is to crush
                                        our&nbsp;</span><span>opponents with the gravity of a thousand suns</span>
                                </li>
                                <li>
                                    <span>
                                        We'll be watching all of the action in
                                        our
                                    </span>
                                    <a class="na_red_text hyperlink" href="https://hyperfy.io/astronaut" rel="noopener"
                                        target="_blank">Astronaut&nbsp;Moonbase
                                    </a>!
                                </li>
                                <li>
                                    <span>
                                        Highlight clips of our team will be minted as NFTs and proudly displayed in
                                        the world!
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        Buying apparel and merchandise through our NADCL store supports the players,
                                        the league, and NA DotA<br>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        Much more to come, be sure to follow us on
                                        <a class="na_red_text hyperlink" href="https://twitter.com/astronautesport/"
                                            rel="noopener" target="_blank">Twitter
                                        </a> and become a supporter!
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </body>
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
