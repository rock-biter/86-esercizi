<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $trashed = $request->input('trashed');

        if ($trashed) {
            $posts = Post::onlyTrashed()->get();
        } else {
            $posts = Post::all();
        }

        $num_of_trashed = Post::onlyTrashed()->count();

        return view('posts.index', compact('posts', 'num_of_trashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $post = Post::create($data);

        return to_route('posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($data['title'] !== $post->title) {
            $data['slug'] = Str::slug($data['title']);
        }

        $post->update($data);

        return to_route('posts.show', $post);
    }

    public function restore(Request $request, Post $post)
    {

        if ($post->trashed()) {
            $post->restore();

            $request->session()->flash('message', 'Il post è stato ripristinato.');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->trashed()) {
            $post->forceDelete(); // eliminazione def
        } else {
            $post->delete(); //eliminazione soft
        }


        return back();
    }
}
