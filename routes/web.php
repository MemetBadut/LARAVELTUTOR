<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'dashboard' => 'Home Page'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page',
        'dashboard' => 'About Website'
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact US',
        'dashboard' => 'Customer Service'
    ]);
})->name('contact');

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'post Page',
        'dashboard' => 'Blog Perusahaan',
        'posts' => Post::all()
    ]);
})->name('posts');


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'post page',
        'dashboard' => 'Single Post',
        'post' => $post
    ]);
})->name('posts.detail');
