<x-app-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
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
                        @if ($data['steam'] != null)
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Steam Name</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ $data['steam']->personaname }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Steam ID 64</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ $data['steam']->steamid64 }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">Avatar</h3>
                                </div>
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                        <img src={{ $data['steam']->avatar }}>
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
                            <a href="init-openId" style="color:#0062cc; text-decoration: none;">Steam Login</a>
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
                        <h3 class="text-lg font-medium text-gray-900">Update NADCL Info</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'>NADCL Info</h2>
                        <form method="POST" action="{{ URL('/user/NADCL_Profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nadcl_username">NADCL Username</label>
                                <div>
                                    <input type="text" name="nadcl_username" placeholder="NA_DOTA_RULES_420"
                                        class="@error('title') is-invalid @enderror">
                                </div>
                            </div>
                            <div>
                                @include('code_injects/siggyselection')
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="nadcl_headshot" class="form-label">Player Headshot</label>
                                    <input name="nadcl_headshot" id="nadcl_headshot" type="file"
                                     class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nadcl_aboutme">About Me...</label>
                                <div>
                                    <textarea rows='3' style="width:100%;" name="nadcl_aboutme" placeholder="About me..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>