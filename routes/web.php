<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\activityController;
use App\Http\Controllers\userController;

Route::get('/', [userController::class, 'index']);
Route::get('/admin', [activityController::class, 'index']);
Route::get('/admin/detail/{id}', [activityController::class, 'detail'])->name('kegiatan.detail');
Route::get('/kegiatan/tambah', [activityController::class, 'create']);
Route::get('/login', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/laporan/{id}', function ($id) {
    return view('detailLaporan');
});
