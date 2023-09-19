<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>The Honored Vanguard</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
</head>

<html>

<body class="na_white_text na_blue">
    <div class="main" >
        @include('header')
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="card na_altTBG" style="width: 18rem;">
                        <p class="card-text text-center">
                            SporkFace Killas
                        </p>
                        <a href="{{ url('/thv') }}">
                            <img src="{{ URL('/img/team_logos/thv.png') }}">
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
                                            Vol
                                        </td>
                                        <td>
                                            2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BGod
                                        </td>
                                        <td>
                                            4
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            _lil_nick
                                        </td>
                                        <td>
                                            2
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            thesillysnail
                                        </td>
                                        <td>
                                            5
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            dogical
                                        </td>
                                        <td>
                                            2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kong_wedge
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
                        <h2 class="display-2">The Honored Vanguard</h2>
                        <div class="h4">
                            <p>
                                Hey there, we're The Honored Vanguard, and together with the NADCL, we're shaking up the
                                North American Dota 2 eSports scene. The founders, NonStopGrief and his better half,
                                have been fanboys (and girl) of Dota 2 since 2013. With a few rugrats of their own, the
                                Vanguard, as a military family, is devoted to creating a space where competition is not
                                just intense, but fun, and where talent has room to flourish.
                            </p>
                            <p>
                                We're stoked to bring out the big guns, grooming the future hotshots of NA Dota 2 and
                                making sure North America leaves a lasting footprint on the global Dota 2 map.
                            </p>
                            <p>
                                So, how about it? Will you jump in and join the ride? Duces Viam.
                            </p>
                        </div>
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
