<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\activityController;

Route::get('/', [activityController::class, 'index']);
