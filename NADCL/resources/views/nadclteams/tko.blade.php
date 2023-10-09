<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Trash Knights Online</title>
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
                        <a href="{{ url('/tko') }}">
                            <img src="{{ URL('/img/team_logos/tko.png') }}">
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
                                            WakeMeUp
                                        </td>
                                        <td>
                                            4
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AlienManaBanana
                                        </td>
                                        <td>
                                            2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            High_Shaggy
                                        </td>
                                        <td>
                                            5
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Froogoss
                                        </td>
                                        <td>
                                            4
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Leem
                                        </td>
                                        <td>
                                            3
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nyaalobby
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
                        <h2 class="display-2 text-center">Trash Knights Online</h2>
                        <div class="html-formatter h4">
                            <p>
                                <span>
                                    The
                                    <a class="na_red_text hyperlink" href="https://twitter.com/TRASHKNIGHTSTKO"
                                        rel="noopener" target="_blank">Trash Knights Online
                                    </a>
                                    (TKO) have joined the NADCL in
                                    order to prove that with resourcefulness and resilience, one person's trash can
                                    indeed become another's treasure.
                                </span>
                            </p>
                            <p>
                                <b>
                                </b>
                            </p>
                            <p>
                                <span>
                                    TKO is here to overturn the status quo and bring a breath of fresh air to the
                                    NADCL. They're here to challenge the perception of what it means to be a knight,
                                    proving that bravery and honor aren't tied to shiny armor but to the spirit that
                                    lies within.
                                </span>
                            </p>
                            <p></p>
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
