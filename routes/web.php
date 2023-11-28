<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Maulana Krisna Adhitya',
        'email' => 'maulanakrisna@gmail.com',
        'picture' => 'maulanakrisna.jpg',
    ]);
});

Route::get('posts', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Category List',
        'active' => 'categories',
        'categories' => Category::latest()->get(),
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'active' => 'categories',
        'posts' => $category->posts->load(['category', 'author']),
    ]);
});

Route::get('authors', function () {
    return view('authors', [
        'title' => 'Authors',
        'active' => 'authors',
        'authors' => User::latest()->get(),
    ]);
});

Route::get('author/{author:username}', function (User $author) {
    return view('author', [
        'title' => $author->name,
        'active' => 'authors',
        'posts' => $author->posts->load(['category', 'author']),
    ]);
});
