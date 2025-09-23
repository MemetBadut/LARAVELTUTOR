<?php

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
        'posts' => [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'judul' => 'Artikel 1',
                'author' => 'Bapak Mulprobo',
                'body' => '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus incidunt libero obcaecati iusto veniam
                accusantium tempora officia deserunt animi veritatis repudiandae atque fugiat dolore, aspernatur nam debitis
                sint voluptatibus quia!'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'judul' => 'Artikel 2',
                'author' => 'Bapak Yonobowo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore delectus incidunt rem repudiandae ducimus!
                Placeat nemo iusto, libero magnam necessitatibus sequi dolorum atque hic. Nemo accusamus sapiente non
                delectus tenetur?'
            ],
        ]
    ]);
})->name('posts');


Route::get('/posts/{slug}', function ($slug) {
    $post = [
        [
            'id' => '1',
            'judul' => 'Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Bapak Mulprobo',
            'body' => '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus incidunt libero obcaecati iusto veniam
                accusantium tempora officia deserunt animi veritatis repudiandae atque fugiat dolore, aspernatur nam debitis
                sint voluptatibus quia!'
        ],
        [
            'id' => '2',
            'judul' => 'Artikel 2',
            'slug' => 'judul-artikel-1',
            'author' => 'Bapak Yonobowo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore delectus incidunt rem repudiandae ducimus!
                Placeat nemo iusto, libero magnam necessitatibus sequi dolorum atque hic. Nemo accusamus sapiente non
                delectus tenetur?'
        ],
    ];

    $post = Arr::first($post, function ($post) use ($slug) {
        return $post['id'] == $slug;
    });

    return view('post', ['title' => 'post page', 'dashboard' => 'Single Post', 'post' => $post]);
})->name('posts.detail');
