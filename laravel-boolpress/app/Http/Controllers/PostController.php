<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user_id = Auth::id(); //recupero id utente loggato

        if ($trashed) {
            $posts = Post::onlyTrashed()->where('user_id', $user_id)->get();
        } else {
            // $posts = Post::where('user_id', $user_id)->get();
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
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('posts.create', compact('categories', 'tags'));
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
        // dd($data);

        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::id();

        $post = Post::create($data);

        if (isset($data['tags'])) {
            $post->tags()->attach($data['tags']);
        }

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

        // if ($post->user_id != Auth::id()) {
        //     abort(403, 'Unauthorized action.');
        // }
        $this->authorize('view', $post);

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
        // if ($post->user_id != Auth::id()) {
        //     abort(403, 'Unauthorized action.');
        // }
        $this->authorize('view', $post);

        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('posts.edit', compact('post', 'categories', 'tags'));
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

        $this->authorize('update', $post);

        $data = $request->validated();
        // dd($data);

        if ($data['title'] !== $post->title) {
            $data['slug'] = Str::slug($data['title']);
        }

        $post->update($data);

        if (isset($data['tags'])) {
            $post->tags()->sync($data['tags']);
        } else {
            $post->tags()->sync([]);
        }


        return to_route('posts.show', $post);
    }

    public function restore(Request $request, Post $post)
    {

        if ($post->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

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

        if ($post->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        if ($post->trashed()) {

            // $post->tags()->detach();

            $post->forceDelete(); // eliminazione def
        } else {
            $post->delete(); //eliminazione soft
        }


        return back();
    }
}
