<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id',auth()->user()->id);

        if(request('search')){
            $posts->where('body','like','%'.request('search').'%')
                ->orWhere('title','like','%'.request('search').'%');
        }

        return view('feed.feed', [
            'posts' => $posts->get()

        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);




        $attributes['user_id'] = auth()->id();
        $post= Post::create($attributes);

        if($request->hasFile('images')) {
            $images = $request->file('images');


            foreach($images as $image) {
                $filename = $image->store('public/images');
                $post->pictures()->create([
                    'url' => substr($filename,7),
                    'post_id' => $post->id,
                ]);
            }
        }
        $post->save();

        return redirect('/feed');

    }

    public function edit(Post $post)
    {

        return view('feed.edit' , ['post' => $post]);
    }

    public function update(Post $post)
    {
        // make sure user cant edit other people post
        $attributes = request()->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);
        $attributes['user_id'] = auth()->id();

        $post->update($attributes);

        return redirect('feed')->with('success','successfully Updated');


    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success','post Deleted');
    }

}
