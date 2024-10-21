<?php

use App\Http\Controllers\Bcakend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Backend
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin,vendor',
])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('admin.dashboard');
    Route::get('/profile', [UserController::class, 'show'])->name('admin.profile.show');
});

