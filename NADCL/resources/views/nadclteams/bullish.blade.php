<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bullish On Gaming</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
</head>

<html>

    <body class="na_white_text na_blue">
        <div class="main">
            @include('header')
            <div class="container">
                <div class="row">
                    <div class="col-lg">
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
                                                3/5
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
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Skyward
                                            </td>
                                            <td>
                                                1
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
                    </div>
                    <div class="col-lg">
                        <div class="row" style="padding-top:50px;">
                            <h1 class="display-2"><b>Bullish On Gaming!</b></h1>
                            <ul>
                                <li class='h4'>
                                    <span>
                                        <p>
                                            <a class="na_red_text hyperlink" class="na_red_text hyperlink"
                                                href="https://twitter.com/bullishongaming" rel="noopener"
                                                target="_blank">Bullish on Gaming
                                            </a>
                                            is a community that has formed
                                            around a podcast hosted by&nbsp;
                                            <a class="na_red_text hyperlink" href="https://twitter.com/Peterpandam"
                                                rel="noopener" target="_blank">Peterpandam
                                            </a>
                                            ,
                                            <a class="na_red_text hyperlink" href="https://twitter.com/GregLaird" rel="noopener" target="_blank">Greg
                                                Laird
                                            </a>
                                            , and
                                            <a class="na_red_text hyperlink" href="https://twitter.com/BillElafros"
                                                rel="noopener" target="_blank">Bill Elafros
                                            </a>
                                            .
                                        </p>
                                    </span>
                                </li>
                                <li class='h4'>
                                    <span>
                                        <p>Anyone and everyone is welcome to join their
                                            <a class="na_red_text hyperlink" href="https://discord.gg/6q6cmrj6gU"
                                                rel="noopener" target="_blank">Discord
                                            </a>
                                            where they discuss gaming, esports, crypto,
                                            business, and basketball...
                                            <p class="h1"></p>
                                            <p class="h1"></p>
                                            Catch their show live on Twitter or
                                            listen to the recordings on
                                            <a class="na_red_text hyperlink"
                                                href="https://open.spotify.com/show/4zIZMZhueiQnpzZYWBrmz5?si=95de99496a4d4da0"
                                                rel="noopener" target="_blank">Spotify
                                            </a>
                                            !
                                        </p>
                                    </span>
                                </li>
                            </ul>
                           
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
