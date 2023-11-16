<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

