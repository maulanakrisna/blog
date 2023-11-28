<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::with(['author', 'category'])->latest()->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'post' => $post,
        ]);
    }
}
