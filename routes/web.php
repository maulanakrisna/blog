<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('authors', function () {
    return view('authors', [
        'title' => 'Authors',
        'active' => 'authors',
        'authors' => User::latest()->get(),
    ]);
});

Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);
