<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $results = Post::with('category:id,name', 'category.posts', 'tags', 'user')->orderBy('created_at', 'desc')->paginate(12);

        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }
}
