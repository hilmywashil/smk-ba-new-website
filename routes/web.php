<?php

use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

// PUBLIC ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::view('/kontak', 'pages.contact')->name('contact');
Route::post('/kontak', [MessageController::class, 'store'])->name('messages.store');

Route::get('/ppdb/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran');


// AUTH ROUTES
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// ADMIN ROUTES
Route::middleware(['auth', 'role:admin'])->group(function () {

    // Admin Dashboard Route
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Admin Berita Routes
    Route::get('/dashboard/admin/posts', [AdminPostController::class, 'index'])->name('admin.berita');
    Route::get('/dashboard/admin/post/create', [AdminPostController::class, 'create'])->name('admin.berita.create');
    Route::post('/dashboard/admin/post', [AdminPostController::class, 'store'])->name('admin.berita.store');
    Route::get('/dashboard/admin/post/{id}/edit', [AdminPostController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/dashboard/admin/post/{id}', [AdminPostController::class, 'update'])->name('admin.berita.update');
    Route::delete('/dashboard/admin/post/{id}', [AdminPostController::class, 'destroy'])->name('admin.berita.destroy');

    Route::get('/dashboard/admin/messages', [AdminMessageController::class, 'index'])->name('admin.messages');

    //READ UNREAD
    Route::post('/dashboard/admin/message/{id}/read', [AdminMessageController::class, 'markAsRead'])->name('admin.messages.read');
    Route::post('dashboard/admin/message/{id}/unread', [AdminMessageController::class, 'markAsUnread'])->name('admin.messages.unread');

    Route::delete('/dashboard/admin/message/{id}', [AdminMessageController::class, 'destroy'])->name('admin.messages.destroy');


});

// GURU ROUTES
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/dashboard/guru', fn() => view('dashboard.guru.pages.index'))->name('guru.dashboard');
});

// SISWA ROUTES
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/dashboard/siswa', fn() => view('siswa.dashboard'))->name('siswa.dashboard');
});