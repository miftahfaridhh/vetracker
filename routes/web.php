<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CarsController;


Route::get('/', [PagesController::class, 'home']);
Route::get('/eror', [PagesController::class, 'eror']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/team', [PagesController::class, 'team']);


//Cars - Database
Route::get('cars', [CarsController::class, 'index']);
Route::get('add-cars', [CarsController::class, 'create']);
Route::post('add-cars', [CarsController::class, 'store']);
Route::get('edit-cars/{id}', [CarsController::class, 'edit']);
Route::put('update-cars/{id}', [CarsController::class, 'update']);
Route::get('delete-cars/{id}', [CarsController::class, 'destroy']);


// Route::get('/login', [PagesController::class, 'login']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
