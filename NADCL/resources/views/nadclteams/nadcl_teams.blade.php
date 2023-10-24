<x-app-layout>
    <x-slot name="customheader"></x-slot>
    <div class="main container" style="margin-top:80px;">
        <div class="container shadow">
            <div id='#'>
                @include('/code_injects/joinus')
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <h2 class="na_red_text" style="font-size: 2em"><b>Our Current Teams</b></h2>
                    <hr style="width:100%;border:5px solid red">
                    <div id="test" class="grid-container">
                        <a href="{{ url('/Teams/' . $team->teamname) }}">
                            <img class="grid_item" src="{{ URL('/img/team_logos/' . $team->teamlogo) }}">
                            <h3 class="text-center">{{ $team->teamname }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div id='teams' class="container na_red_text shadow"style="padding-top:20px; margin-top:20px;">
            <h2 style="font-size: 2em"><b>Our Season 4 Teams</b></h2>
            <hr style="width:100%;border:5px solid red ">
            @include('code_injects/season4teams')
        </div>
        @include('/code_injects/footer')
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
    </div>
    </div>
    </body>
</x-app-layout>
