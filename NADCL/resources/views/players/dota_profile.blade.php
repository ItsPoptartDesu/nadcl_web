<x-app-layout>
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
                    <div class="px-4 sm:px-0">
                        <p class="mt-1 text-sm text-gray-600">
                            Link your Steam Account<b> needed for tournament registration</b>
                        </p>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'> Steam Info</h2>
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900">Steam Name</h3>
                            </div>
                            <div class="px-4 sm:px-0">
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ $steam->personaname }}
                                </p>
                            </div>
                        </div>
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900">Steam ID 64</h3>
                            </div>
                            <div class="px-4 sm:px-0">
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ $steam->steamid64 }}
                                </p>
                            </div>
                        </div>
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900">Avatar</h3>
                            </div>
                            <div class="px-4 sm:px-0">
                                <p class="mt-1 text-sm text-gray-600">
                                    <img src={{ $steam->avatar }}>
                                </p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-info">
                            <a href="init-openId" style="color:#0062cc; text-decoration: none;">Steam Login</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
