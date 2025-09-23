<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Anime Routes
    Route::resource('animes', AnimeController::class);

    // Reading Routes
    Route::resource('readings', ReadingController::class);

    //Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
});

require __DIR__.'/auth.php';
