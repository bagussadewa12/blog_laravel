<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->get(['title', 'slug', 'content', 'thumbnail', 'created_at']);
    }

    public function show($slug)
{
    $post = Post::where('slug', $slug)->where('is_published', true)->first();

    if (!$post) {
        return response()->json(['message' => 'Post not found.'], 404);
    }

    return response()->json([
        'title' => $post->title,
        'slug' => $post->slug,
        'content' => $post->content,
        'thumbnail' => $post->thumbnail,
        'created_at' => $post->created_at,
    ]);
}
}
