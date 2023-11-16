<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $title = 'Hello World';
    $navPages = [
        'about',
        'contacts',
        'blog'
    ];
    return view('home', compact('title', 'navPages'));
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contacts', function(){
    return view('contacts');
});

Route::get('/blog', function(){
    return view('blog');
});

