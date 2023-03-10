<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in   !") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-xxxl mt-5">
        <div class="row gap-3">
            <div class="col-2 col-md-3 offset-md-1 offset-2  bg-primary me-4">
                <ul>


                </ul>
            </div>
            <div class="col-6 bg-primary-subtle text-emphasis-primary rounded-2">
                <div class="container">
                    <div class="row bg-success-subtle">
                        <x-feed.updateForm :post=$post />
                    </div>
                    <div class="row bg-success p-3">
                        {{-- @foreach ($post as $post)
                            <x-feed.feed_card :post=$post />
                        @endforeach --}}
                    </div>
                </div>


            </div>
            <div class="col">
{{-- right free space --}}
            </div>

        </div>

    </div>
</x-layout>
