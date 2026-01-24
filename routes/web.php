<?php

use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::get('/news-activities', [PostController::class, 'index'])->name('posts');
Route::get('/news-activities/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Admin Berita Routes
    Route::get('/dashboard/admin/berita', [AdminPostController::class, 'index'])->name('admin.berita');
    Route::get('/dashboard/admin/berita/create', [AdminPostController::class, 'create'])->name('admin.berita.create');
    Route::post('/dashboard/admin/berita', [AdminPostController::class, 'store'])->name('admin.berita.store');
    Route::put('/dashboard/admin/berita/{id}', [AdminPostController::class, 'update'])->name('admin.berita.update');
    Route::delete('/dashboard/admin/berita/{id}', [AdminPostController::class, 'destroy'])->name('admin.berita.destroy');

    Route::middleware(['auth', 'role:guru'])->group(function () {
        Route::get('/dashboard/guru', fn() => view('dashboard.guru.pages.index'))->name('guru.dashboard');
    });

    Route::middleware(['auth', 'role:siswa'])->group(function () {
        Route::get('/dashboard/siswa', fn() => view('siswa.dashboard'))->name('siswa.dashboard');
    });

    //Logout Route
    Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});