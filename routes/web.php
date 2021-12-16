<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/eror', [PagesController::class, 'eror']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/team', [PagesController::class, 'team']);
// Route::get('/login', [PagesController::class, 'login']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
