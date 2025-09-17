<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage', 'dashboard' => 'Home Page']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'dashboard' => 'About Page']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact US', 'dashboard' => 'Customer Service']);
})->name('contact');

Route::get('/blog', function () {
    return view('blog', ['title' => '']);
})->name('blog');
