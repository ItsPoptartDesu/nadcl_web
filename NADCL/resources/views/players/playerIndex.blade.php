<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title> {{ $data['profile']->displayname }}</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div>
        @include('/code_injects/nadcl_header')
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="card na_altTBG" style="width: 18rem;">
                        <p class="card-text text-center">
                            Steam Info: {{ $data['profile']->displayname }}
                        </p>
                        <img src="{{ URL($data['profile']->avatarfull) }}">
                        <div class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Name </th>
                                        <td>{{ $data['profile']->realname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Role </th>
                                        <td>{{ $data['profile']->role }}</td>
                                    </tr>
                                    <tr>
                                        <th>MMR </th>
                                        <td>{{ $data['profile']->mmr }}</td>
                                    </tr>
                                    <tr>
                                        <th>Can Captain </th>
                                        <td>{{ $data['profile']->cancaptain }}</td>
                                    </tr>
                                    <tr>
                                        <th>Steam ID </th>
                                        <td><a target="_blank" href={{ $data['profile']->profileurl }}>Steam
                                                Profile</a></td>
                                    </tr>
                                    <tr>
                                        <th>Siggy </th>
                                        <td>{{ $data['profile']->siggy }}</td>
                                    </tr>
                                    <tr>
                                        <th>Accolades</th>
                                        <td>
                                            @if ($data['accolades'] != null)
                                                @if ($data['accolades'][0] != null)
                                                    @foreach ($data['accolades'] as $acc)
                                                        <img style="width:41px; height:41px; padding:0px;"
                                                            src="{{ asset('/img/accolades/' . $acc->img) }}"
                                                            class="btn btn-secondary" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="{{ $acc->about }}">
                                                    @endforeach
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Socials</th>
                                        <td>
                                            <div class="row">
                                                @if ($data['profile']->x != null)
                                                    <div class="col-auto">
                                                        <a href="https://x.com/{{ $data['profile']->x }}"
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($data['profile']->youtube != null)
                                                    <div class="col-auto">
                                                        <a href="https://youtube.com/{{ $data['profile']->youtube }}"
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-youtube"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($data['profile']->twitch != null)
                                                    <div class="col-auto">
                                                        <a href="https://twitch.tv/{{ $data['profile']->twitch }}"
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-twitch"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z" />
                                                                <path
                                                                    d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($data['profile']->tiktok != null)
                                                    <div class="col-auto">
                                                        <a href="https://www.tiktok.com/{{ $data['profile']->tiktok }}"
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-tiktok"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row" style="padding-top:50px;">
                        <div class="shadow">
                            <div class="row">
                                <h3 class="h3">NADCL Info: {{ $data['profile']->displayname }}</h3>
                                <div class="col-auto">
                                    <div class="float-left">
                                        <img class="header_logo"
                                            src="{{ URL('/headshots/' . $data['profile']->headshot) }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="h4">
                                        {{ $data['profile']->about }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('/code_injects/footer')
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    </div>
</body>

</html>
