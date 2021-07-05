<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/eror', [PagesController::class, 'eror']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/team', [PagesController::class, 'team']);