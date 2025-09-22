<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'dashboard' => 'Home Page']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'dashboard' => 'About Website']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US', 'dashboard' => 'Customer Service']);
})->name('contact');

Route::get('/blog', function () {
    return view('blog', ['title' => 'BLOG Page', 'dashboard' => 'Blog Perusahaan']);
})->name('blog');
