<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages-home');

Route::get('/post', function () {
    return view('pages.post');
})->name('pages-post');

Route::get('/tag', function () {
    return view('pages.tag');
})->name('pages-tag');

Route::get('/author', function () {
    return view('pages.author');
})->name('pages-author');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages-about');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('pages-profile');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('pages-detail');
