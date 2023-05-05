<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {

        $results = Post::with('category.posts')->orderBy('created_at', 'desc')->paginate(12);

        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }

    public function show($slug)
    {

        $post = Post::with([
            'category.posts' => function (Builder $query) use ($slug) {
                $query->where('slug', '!=', $slug)->orderBy('created_at', 'desc')->limit(3);
            }
        ])->where('slug', $slug)->first();



        // $relatedPost = Post::where('slug', '!=', $slug)->orderBy('created_at', 'desc')->limit(3)->get();

        // $post->relatedPosts = $relatedPost;
        // il codice qui sotto genera un 500 Internal Server Error, dove sta l'errore?
        // $post->load([
        //     'category.posts' => function (Builder $query) use ($slug) {
        //         $query->where('slug', '!=', $slug)->orderBy('created_at', 'desc')->limit(3);
        //     }
        // ]);

        if ($post) {
            return response()->json([
                'success' => true,
                'post' => $post
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Nessun post trovato'
            ]);
        }
    }
}
