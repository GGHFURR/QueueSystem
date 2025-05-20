<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\RedirectIfAuthenticatedToDashboard;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Route::get('/', function () {
//     return view('welcome');
// });

// ===========================
// PAGE YANG PERLU LOGIN
// ===========================
Route::middleware(['auth'])->group(function () {
    Route::get('/laporan', function () {
        return view('laporan');
    });
    Route::get('/laporan/{id}', function ($id) {
        return view('detailLaporan');
    });
    Route::get('/', [userController::class, 'index']);
    Route::get('/admin', [activityController::class, 'index'])->name('admin.index');
    Route::get('/admin/detail/{id}', [activityController::class, 'detail'])->name('kegiatan.detail');
    Route::get('/kegiatan/tambah', [activityController::class, 'create']);
    Route::post('/kegiatan/tambah', [ActivityController::class, 'store']);
    Route::post('/kelas/tambah', [ClassesController::class, 'store'])->name('kelas.store');
});

// ===========================
// PAGE YANG TIDAK PERLU LOGIN
// ===========================
Route::middleware([RedirectIfAuthenticatedToDashboard::class])->group(function () {
    Route::get('/signup', function () {
        return view('signup');
    })->name('register');

    Route::post('/signup', [RegisteredUserController::class, 'store']);

    Route::get('/login', function () {
        return view('signin');
    })->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');