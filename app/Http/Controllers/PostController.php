<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
            'active' => 'posts',
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'post' => $post,
            'active' => 'posts',
        ]);
    }
}
