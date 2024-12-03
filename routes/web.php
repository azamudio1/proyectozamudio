<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Ruta principal para el HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard con middleware de autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas con autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta para la página de reglas
Route::get('/reglas', function () {
    return view('reglas');
})->name('reglas');

// Archivo para autenticación
require __DIR__.'/auth.php';
