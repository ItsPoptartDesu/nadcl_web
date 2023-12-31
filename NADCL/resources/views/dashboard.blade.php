<x-app-layout>
    <x-slot name="livewire">
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <x-application-logo class="block h-12 w-auto" />

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome to your NADCL Profile
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        Welcome to the NADCL beta program. Thank you for your time.
                    </p>
                </div>
            </div>
            <div class="items-center text-center profile_container">
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                            <a href="{{ url('/dashboard/NADCL_Profile') }}">NADCL Profile</a>
                        </h2>
                        <div class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Displayed Across NADCL site
                        </div>
                        <div class="mt-4 text-sm">
                            <div class="mt-1 text-sm text-gray-600">
                                <b>Connected Steam Name:</b> {{ auth()->user()->steam->personaname }}
                            </div>
                            @if (auth()->user()->headshot)
                                <img class="text-center" style="display:inline;width:100px;height:100px;"
                                    src="{{ asset('/headshots/' . auth()->user()->headshot) }}">
                            @else
                                <img class="text-center" style="display:inline; width:100px;height:100px;"
                                    src={{ asset('/img/we_want_you.png') }}>
                            @endif
                        </div>
                    </div>
                </div>
                @if (auth()->user()->isteamowner)
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{ url('/dashboard/NADCL_CreateTeam') }}">NADCL Team Owner</a>
                            </h2>
                            <div class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Your Team Info
                            </div>
                            <div class="mt-4 text-sm">
                                <div class="mt-1 text-sm text-gray-600">
                                    <b>Team Name:</b>
                                    @if ($data['team'])
                                        {{ $data['team']->teamname }}
                                    @endif
                                </div>
                                <div class="mt-1 text-sm text-gray-600">
                                    <b>Manager:</b>
                                    @if ($data['team'])
                                        {{ $data['team']->manager }}
                                    @endif
                                </div>
                                @if ($data['team'])
                                    <img class="text-center" style="display:inline;width:100px;height:100px;"
                                        src="{{ asset('img/team_logos/' . $data['team']->teamlogo) }}">
                                @else
                                    <img class="text-center" style="display:inline; width:100px;height:100px;"
                                        src={{ URL('/img/we_want_you.png') }}>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->isadmin)
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="{{ url('/dashboard/AdminPanel') }}">NADCL Admin</a>
                            </h2>
                            <div class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Admin Info
                            </div>
                            <div class="mt-4 text-sm">
                                <div class="mt-1 text-sm text-gray-600">
                                    <b>Admin Email</b>
                                    {{ auth()->user()->email }}
                                </div>
                                <div class="mt-1 text-sm text-gray-600">
                                    <b>NADCL Username:</b>
                                    {{ auth()->user()->username }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
