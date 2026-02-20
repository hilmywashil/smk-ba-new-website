<?php

use App\Http\Controllers\Admin\AdminHeroesController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');

// Berita Routes
Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita/{slug}', [PostController::class, 'show'])->name('posts.show');

// Contact & Pendaftaran Routes
Route::view('/kontak', 'pages.contact')->name('contact');
Route::post('/kontak', [MessageController::class, 'store'])->name('messages.store');
Route::get('/ppdb/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');


// AUTH ROUTES
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});

// ADMIN ROUTES
Route::middleware(['auth', 'role:admin'])->prefix('/dashboard/admin')->group(function () {

    // Admin Dashboard Route
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Admin Berita Routes
    Route::get('/posts', [AdminPostController::class, 'index'])->name('admin.berita');
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('admin.berita.create');
    Route::post('/posts', [AdminPostController::class, 'store'])->name('admin.berita.store');
    Route::get('/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/posts/{id}', [AdminPostController::class, 'update'])->name('admin.berita.update');
    Route::delete('/posts/{id}', [AdminPostController::class, 'destroy'])->name('admin.berita.destroy');

    // Admin Messages Routes
    Route::get('/messages', [AdminMessageController::class, 'index'])->name('admin.messages');
    Route::delete('/messages/{id}', [AdminMessageController::class, 'destroy'])->name('admin.messages.destroy');
    //READ UNREAD
    Route::post('/messages/{id}/read', [AdminMessageController::class, 'markAsRead'])->name('admin.messages.read');
    Route::post('/messages/{id}/unread', [AdminMessageController::class, 'markAsUnread'])->name('admin.messages.unread');

    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');

    // Admin Hero Routes
    Route::get('/home/hero', [AdminHeroesController::class, 'create'])->name('admin.hero.create');
    Route::post('/home/hero', [AdminHeroesController::class, 'store'])->name('admin.hero.store');
    Route::get('hero/{hero}/edit', [AdminHeroesController::class, 'edit'])->name('admin.hero.edit');
    Route::put('hero/{hero}', [AdminHeroesController::class, 'update'])->name('admin.hero.update');
    Route::delete('hero/{hero}', [AdminHeroesController::class, 'destroy'])->name('admin.hero.destroy');
});

// GURU ROUTES
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/dashboard/guru', fn() => view('dashboard.guru.pages.index'))->name('guru.dashboard');
});

// SISWA ROUTES
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/dashboard/siswa', fn() => view('siswa.dashboard'))->name('siswa.dashboard');
});