<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Maulana Krisna Adhitya',
        'email' => 'maulanakrisna@gmail.com',
        'picture' => 'maulanakrisna.jpg',
    ]);
});

Route::get('blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'categories' => Category::all(),
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load(['category', 'author']),
    ]);
});

Route::get('author/{author:username}', function (User $author) {
    return view('author', [
        'title' => $author->name,
        'posts' => $author->posts->load(['category', 'author']),
    ]);
});
