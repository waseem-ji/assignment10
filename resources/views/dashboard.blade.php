<x-layout>



    <div class="container-xxxl mt-5">
        <div class="row gap-3">
            <div class="col-3 offset-1 rounded-2">
                <x-about /> 
            </div>
            <div class="col-6 bg-light text-emphasis-primary rounded-4">
                @foreach ($posts as $post)
                    <x-post_card :post=$post />

                @endforeach

            </div>
            <div class="col">
{{-- Right free space --}}

            </div>

        </div>

    </div>
</x-layout>
