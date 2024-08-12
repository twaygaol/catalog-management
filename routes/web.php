<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingPageController::class, 'index']);
Route::view('/about', 'about-footer');

Route::get('/product/{id}', [LandingPageController::class, 'show'])->name('product.show');
Route::get('/category/{categoryId}', [LandingPageController::class, 'showByCategory'])->name('product.category');



