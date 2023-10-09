<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title> NADCL Players</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="main">
        @include('/code_injects/nadcl_header')
        <div class="container"style="margin-top:20px;">
            <div class="card">
                <div class="card-hearder pb-0 border-0">
                    <h5 style="margin-top:10px;margin-left:10px;">Enter a Players NADCL Username</h5>
                </div>
                <div class="card-body">
                    <form action="{{ URL('/players') }}" method="GET">
                        <input name="search" placeholder="NADCL Username"class="form-control w-100" type="text">
                        <button class="btn btn-outline-info">Search</button>
                    </form>
                </div>
            </div>
            <div class="shadow" style="margin-top:20px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Headshot</th>
                            <th scope="col">NADCL Name</th>
                            <th scope="col">Steam Name</th>
                            <th scope="col">Siggy</th>
                            <th scope="col">MMR</th>
                            <th scope="col">Steam Profile</th>
                            <th scope="col">Accolades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['profile']['profile'] as $player)
                            <tr>
                                <th scope="row">
                                    @if ($player->headshot)
                                        <img class='header_logo' src="{{ asset('/headshots/' . $player->headshot) }}"
                                            style="margin:0px;">
                                    @endif
                                </th>
                                <td><a class="na_red_text"
                                        href="{{ URL('/players/' . $player->displayname) }}">{{ $player->displayname }}</a>
                                </td>
                                <td>{{ $player->personaname }}</td>
                                <td>{{ $player->siggy }}</td>
                                <td>{{ $player->mmr }}</td>
                                <td><a class="na_red_text" href={{ $player->profileurl }} target="_blank">Steam
                                        Profile</a></td>
                                <td>
                                    <?php $accolade = explode(',', $player->accolades);
                                    foreach ($accolade as $acc) {
                                        $f = DB::table('nadcl_accolade')->where('key',$acc)->first();
?>
                                    <img style="width:41px; height:41px; padding:0px;"
                                        src="{{ asset('/img/accolades/' . $f->img) }}" class="btn btn-secondary"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="{{ $f->about }}">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('/code_injects/footer')
    </div>
    {{-- </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
</body>

</html>
