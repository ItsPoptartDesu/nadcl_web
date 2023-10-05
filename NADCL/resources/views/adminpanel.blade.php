<x-app-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('statusError'))
        <div class="alert alert-danger">
            {{ session('statusError') }}
        </div>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
    <!-- UPDATE NADCL Team Info -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Create Accolade</h3>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded sm:rounded">
                        <h2 class='h2'>Team Info</h2>
                        <div class="container">
                            <form style="padding-top:10px;"method="POST"
                                action="{{ URL('/dashboard/AdminPanel') }}" enctype="multipart/form-data">
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
                                            <div class="col-auto">
                                                <div class="form-group">
                                                    <label for="nadcl_name">Accolade Name</label>
                                                    <div>
                                                        <input size="30";type="text" name="nadcl_name"
                                                            id="nadcl_name" placeholder='NADCL_S4W1'
                                                            class="@error('title') is-invalid @enderror">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="nadcl_img" class="form-label">Accolade Img</label>
                                                <input name="nadcl_img" id="nadcl_img" type="file"
                                                    class="form-control form-control-sm" />
                                            </div>
                                            <div class="col-auto">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="nadcl_about">Hover Description</label>
                                                    <div>
                                                        <textarea rows='2' style="width:100%;" name="nadcl_about"
                                                            placeholder="NADCL Season 4 Week 1 Winner"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary">Save</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
