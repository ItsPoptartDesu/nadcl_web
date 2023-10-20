<x-app-layout>
    <x-slot name="livewire">
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Player Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Steam Info</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'> Steam Info</h2>
                        @if (Auth::user()->steam != null)
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Steam Name</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ Auth::user()->steam->personaname }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Steam ID 64</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ Auth::user()->steam->steamid64 }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Avatar</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        <img src={{ Auth::user()->steam->avatar }}>
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Nothing Connected</h3>
                                </div>
                            </div>
                        @endif
                        <button type="button" class="btn btn-outline-info">
                            <a href="init-openId" style="color:#0062cc; text-decoration: none;">Steam Link</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Required Tournament Info</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'>Tournament Info</h2>
                        <form style="padding-top:10px;"method="POST" action="{{ URL('/dashboard/NADCL_Profile') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <div class="form-group">
                                    <span>
                                        <h3>Needed for NADCL Tournaments<svg style="display:inline;"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                            </svg>
                                            <hr style="width:100%;border:3px solid red">
                                        </h3>
                                    </span>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-group">
                                                <label for="nadcl_username">NADCL Username</label>
                                                <div>
                                                    <input type="text" name="nadcl_username"
                                                        placeholder={{ auth()->user()->displayname == null ? 'Username...' : auth()->user()->displayname }}
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label for="nadcl_discord">DiscordID?</label>
                                            <div>
                                                <input type="text" name="nadcl_discord"
                                                    placeholder={{ auth()->user()->discord == null ? 'DiscordID...' : auth()->user()->discord }}
                                                    class="@error('title') is-invalid @enderror">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label for="nadcl_mmr">MMR?</label>
                                            <div>
                                                <input type="text" name="nadcl_mmr"
                                                    placeholder={{ auth()->user()->mmr == null ? 'mmr...' : auth()->user()->mmr }}
                                                    class="@error('title') is-invalid @enderror">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label for="nadcl_cancaptain">Are you a
                                                Captain?</label>
                                            <select name="nadcl_cancaptain" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example">
                                                <option value="none" selected disabled hidden>
                                                    Captain?
                                                </option>
                                                <option value="yes">yes</option>
                                                <option value="no">no</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-auto">
                                            <label for="nadcl_role">What is your role?</label>
                                            <select name="nadcl_role" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example">
                                                <option value="none" selected disabled hidden>
                                                    What is
                                                    your role?
                                                </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                        <div class="col-auto">
                                            <label for="nadcl_headshot" class="form-label">Player
                                                Headshot</label>
                                            <input name="nadcl_headshot" id="nadcl_headshot" type="file"
                                                class="form-control form-control-sm" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Customize Profile</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'>NADCL Info</h2>
                        <div class="container">
                            <form style="padding-top:10px;"method="POST"
                                action="{{ URL('/dashboard/NADCL_Profile') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div>
                                    <div class="form-group">
                                        <span>
                                            <h3>Highlighted Accolade<svg style="display:inline;"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg>
                                                <hr style="width:100%;border:3px solid red">
                                            </h3>
                                        </span>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="nadcl_accname">Accolade Name</label>
                                                    <div>
                                                        <select name="nadcl_accname"
                                                            class="form-select form-select-sm"
                                                            aria-label=".form-select-sm example">
                                                            <option value="none" selected disabled hidden>Accolade
                                                                Name</option>
                                                            @if (isset(Auth::user()->accolades))
                                                                @foreach (Auth::user()->accolades as $acc)
                                                                    <option value="{{ $acc->id }}">
                                                                        {{ $acc->about }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>
                                            <h3 style="padding-top:25px;">Socials & Info<svg style="display:inline;"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg></h3>
                                            <hr style="width:100%;border:3px solid red">
                                        </span>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-group">
                                                    <label for="nadcl_mmr">X?</label>
                                                    <div>
                                                        <input type="text" name="nadcl_x"
                                                            placeholder={{ auth()->user()->x == null ? 'x.com/...' : auth()->user()->x }}
                                                            class="@error('title') is-invalid @enderror">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="nadcl_twitch">Twitch?</label>
                                                <div>
                                                    <input type="text" name="nadcl_twitch"
                                                        placeholder={{ auth()->user()->twitch == null ? 'twitch.tv/...' : auth()->user()->twitch }}
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="nadcl_youtube">Youtube?</label>
                                                <div>
                                                    <input type="text" name="nadcl_youtube"
                                                        placeholder={{ auth()->user()->youtube == null ? 'youtube.com/...' : auth()->user()->youtube }}
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="nadcl_tiktok">TikTok?</label>
                                                <div>
                                                    <input type="text" name="nadcl_tiktok"
                                                        placeholder={{ auth()->user()->tiktok == null ? 'tiktok.com/...' : auth()->user()->tiktok }}
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-group ">
                                                    @include('code_injects/siggyselection')
                                                </div>
                                            </div>
                                            <div class="col-sm"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nadcl_hottake">Hot Take...</label>
                                        <div>
                                            <textarea rows='3' style="width:100%;" name="nadcl_hottake"
                                                placeholder="{{ auth()->user()->hottake == null ? 'Tinker needs a buff:)' : auth()->user()->hottake }}"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nadcl_aboutme">About Me...</label>
                                        <div>
                                            <textarea rows='3' style="width:100%;" name="nadcl_aboutme"
                                                placeholder="{{ auth()->user()->aboutme == null ? 'I like long walks on the beach' : auth()->user()->aboutme }}"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UPDATE NADCL INFO -->

</x-app-layout>
