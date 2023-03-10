<div class="border border-primary rounded-2 mt-3 p-4 mb-2">
    <form action="/feed/{{$post->id}}" method="post">
        @csrf
        @method('PATCH')

        <!-- Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="title">Title</label>
          <input type="text" id="title" class="form-control" name="title" placeholder="Make your thoughts stand out" value="{{$post->title}}" />
          @error('title')
                <p class="text-danger"> {{$message}}</p>
            @enderror
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="body">Your Message</label>
            <textarea class="form-control" id="body" rows="4" name="body" title="body" placeholder="Speak your mind..."> {{$post->body}} </textarea>
            @error('body')
                <p class="text-danger"> {{$message}}</p>
            @enderror
        </div>



        <!-- Submit button -->
        <div class="flex justify-end">
            {{-- image upload  --}}
            <button type="submit" class="btn btn-primary btn-block mb-4">Update </button>
        </div>
      </form>
</div>
