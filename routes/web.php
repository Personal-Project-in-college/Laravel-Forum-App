<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages-home');

Route::get('/postingan', function () {
    return view('pages.postingan');
})->name('pages-postingan');

Route::get('/label', function () {
    return view('pages.label');
})->name('pages-label');

Route::get('/penulis', function () {
    return view('pages.penulis');
})->name('pages-penulis');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('pages-tentang');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('pages-profile');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('pages-detail');
