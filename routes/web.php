<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Maulana Krisna Adhitya",
        "email" => "maulanakrisna@gmail.com",
        "picture" => "maulanakrisna.jpg"
    ]);
});

Route::get('blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'categories' => Category::all()
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'category' => $category->name,
        'posts' => $category->posts
    ]);
});
