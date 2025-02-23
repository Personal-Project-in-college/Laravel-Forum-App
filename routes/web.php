<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, 
    UserController, 
    PostController, 
    LikeController, 
    CommentController
};

// 🏠 Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('pages-home');

// 🧑‍💻 Profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('pages-profile');
});

// ✍️ Postingan
Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('pages-post');
    Route::get('/{slug}', [PostController::class, 'show'])->name('pages-post-detail');
});

// ❤️ Like Post
Route::middleware('auth')->post('/like/{post}', [LikeController::class, 'store'])->name('like-store');

// 💬 Komentar
Route::middleware('auth')->prefix('comment')->group(function () {
    Route::post('/store', [CommentController::class, 'store'])->name('comment-store');
    Route::put('/{id}', [CommentController::class, 'update'])->name('comment-update');
    Route::delete('/{id}', [CommentController::class, 'destroy'])->name('comment-destroy');
});

// 🔐 Login Redirect
Route::get('/login', fn() => redirect()->route('filament.dashboard.auth.login'))->name('login');

// 📖 Tentang
Route::view('/about', 'pages.about')->name('pages-about');

// 📌 Profil Author (Tetap di luar karena beda struktur)
Route::get('/profile/author/{slug}', [UserController::class, 'profileAuthor'])->name('pages-profile-author');

