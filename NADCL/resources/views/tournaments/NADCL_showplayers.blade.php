<x-app-layout>
    <x-slot name="customheader">
    </x-slot>
    <div class="container"style="padding-top:100px;">
        <div class="card">
            <div class="card-hearder pb-0 border-0">
                <h5 style="margin-top:10px;margin-left:10px;">Enter a Players NADCL Username</h5>
            </div>
            <div class="card-body">
                <form action="{{ URL('/players') }}" method="GET">
                    <input name="search" placeholder="NADCL Username"class="form-control w-100" type="text">
                    <button class="btn btn-danger">Search</button>
                </form>
            </div>
        </div>
        <div class="shadow" style="margin-top:20px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Headshot</th>
                        <th scope="col">NADCL Name</th>
                        <th scope="col">Siggy</th>
                        <th scope="col">MMR</th>
                        <th scope="col">Can Captain</th>
                        <th scope="col">Discord</th>
                        <th scope="col">About</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['profile'] as $player)
                        <tr>
                            <th scope="row">
                                @if ($player->headshot)
                                    <img class='header_logo' src="{{ asset('/headshots/' . $player->headshot) }}"
                                        style="margin:0px;">
                                @endif
                            </th>
                            <td><a class="na_red_text"
                                    href="{{ URL('/playercard/' . $player->username) }}">{{ $player->username }}</a>
                            </td>
                            <td>{{ $player->siggy }}</td>
                            <td>
                                @if ($player->accolade)
                                    <img style="width:41px; height:41px; padding:0px;"
                                        src="{{ asset('/img/accolades/' . $player->accolade->img) }}"
                                        class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="{{ $player->accolade->about }}">
                                @else
                                    No Accolade
                                @endif
                            </td>
                            {{-- <td>{{ $player->mmr }}</td> --}}
                            <td>{{ $player->cancaptain }}</td>
                            <td>{{ $player->discord }}</td>
                            <td>{{ $player->about }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
