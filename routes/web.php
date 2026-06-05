<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{id}', [PageController::class, 'show'])->name('products.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

