<x-app-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NADCL Team Profile') }}
        </h2>
    </x-slot>
    <!-- UPDATE NADCL Team Info -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Update NADCL Info</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'>NADCL Info</h2>
                        <div class="container">
                            <form style="padding-top:10px;"method="POST"
                                action="{{ URL('/dashboard/NADCL_CreateTeam') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div>
                                    <span>
                                        <h3>Basic Info Needed<svg style="display:inline;"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                            </svg></h3>
                                        <hr style="width:100%;border:3px solid red">
                                    </span>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="nadcl_teamname">Team Name</label>
                                                    <div>
                                                        <input type="text" name="nadcl_teamname"
                                                            placeholder="placeholder..."
                                                            class="@error('title') is-invalid @enderror">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nadcl_teamlogo" class="form-label">Team Logo</label>
                                                <input name="nadcl_teamlogo" id="nadcl_teamlogo" type="file"
                                                    class="form-control form-control-sm" />
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="nadcl_aboutteam">About Team...</label>
                                                    <div>
                                                        <textarea rows='5' style="width:100%;" name="nadcl_aboutteam" placeholder="About Team..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>
                                            <h3>Not needed for NADCL Tournaments<svg style="display:inline;"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg></h3>
                                            <hr style="width:100%;border:3px solid red">
                                        </span>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="nadcl_players">Players seperated by a ','</label>
                                                    <div>
                                                        <input type="text" name="nadcl_players" placeholder="players"
                                                            class="@error('title') is-invalid @enderror">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nadcl_manager">Manager?</label>
                                                <div>
                                                    <input type="text" name="nadcl_manager" placeholder="Manager?"
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nadcl_site">External Site?</label>
                                                <div>
                                                    <input type="text" name="nadcl_site" placeholder="Team Site"
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nadcl_youtube">Youtube?</label>
                                                <div>
                                                    <input type="text" name="nadcl_youtube"
                                                        placeholder="youtube.com/..."
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nadcl_winnings">Winnings?</label>
                                                <div>
                                                    <input type="text" name="nadcl_winnings" placeholder="Winnings?"
                                                        class="@error('title') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col">

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
    </div>
</x-app-layout>
