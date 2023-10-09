<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Astronaut Esports</title>
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
                                            3/5
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Blueberry Beagle
                                        </td>
                                        <td>
                                            5
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
                </div>
                <div class="col container shadow">
                    <div class="" style="">
                        <h1 class='display-2 text-center'><b>Astronaut Esports!</b></h1>
                        <ul>
                            <li class='h4'>
                                <span><a class="na_red_text hyperlink" href="https://astronautesports.com/"
                                        rel="noopener" target="_blank">Astronaut Esports</a> is embarking on a new
                                    journey, setting
                                    our sights on winning the NADCL title with rocket-fueled
                                    dominance&nbsp;<br></span>
                            </li>
                            <li class='h4'>
                                <span>Founded in 2023, our mission in the NADCL is to crush
                                    our&nbsp;</span><span>opponents with the gravity of a thousand suns</span>
                            </li>
                            <li class='h4'>
                                <span>
                                    We'll be watching all of the action in
                                    our
                                </span>
                                <a class="na_red_text hyperlink" href="https://hyperfy.io/astronaut" rel="noopener"
                                    target="_blank">Astronaut&nbsp;Moonbase
                                </a>!
                            </li>
                            <li class='h4'>
                                <span>
                                    Highlight clips of our team will be minted as NFTs and proudly displayed in
                                    the world!
                                </span>
                            </li>
                            <li class='h4'>
                                <span>
                                    Buying apparel and merchandise through our NADCL store supports the players,
                                    the league, and NA DotA<br>
                                </span>
                            </li>
                            <li class='h4'>
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
            @include('/code_injects/footer')
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
