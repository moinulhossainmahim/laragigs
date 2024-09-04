<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Listings
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Authentication
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Users
Route::post('/users', [UserController::class, 'store']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
