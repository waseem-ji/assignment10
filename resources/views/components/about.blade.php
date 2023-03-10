<div class="bg-secondary bg-opacity-25 rounded-3  ">
 <div class="container pb-4">
    <div class="row">
        <div class="col p-2 mt-3 text-center">
            <img src="{{asset(auth()->user()->profile_pic ?? 'https://via.placeholder.com/30x30')}}" alt="Profile Picture" class="rounded-circle" width="280" height="300">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <span class="display-6 fw-bold">{{Str::ucfirst(auth()->user()->name)}} </span>
        </div>
    </div>
 </div>
</div>
