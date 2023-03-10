<x-layout>


    <div class="container-xxxl mt-5">
        <div class="row gap-3">
            <div class="col-2 col-md-3 offset-md-1 offset-2   rounded-1  me-4">
                <x-about />
            </div>
            <div class="col-6 text-emphasis-primary rounded-2">
                <div class="container">
                    <div class="row">
                        <x-feed.form />
                    </div>
                    @if (count($posts))

                    <div class="row p-3 bg-primary rounded-4 shadow mb-3 bg-opacity-25">
                        @foreach ($posts as $post)

                            <x-feed.feed_card :post=$post />

                        @endforeach
                    </div>
                    @else
                    You have not uploaded anything . Share and Lets join the world
                    @endif

                </div>


            </div>
            <div class="col">
{{-- right free space --}}
            </div>

        </div>

    </div>
</x-layout>
