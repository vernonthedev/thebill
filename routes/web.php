<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});


Route::middleware('auth', 'verified')->group(function () {
    //dash routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // user profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // currency model routes
    Route::resource('/currencies', App\Http\Controllers\CurrencyController::class);
});

require __DIR__.'/auth.php';


