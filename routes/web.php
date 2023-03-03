<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/user', [RegisterController::class, 'store1']);
Route::get('/user', [RegisterController::class, 'index1']);


Route::get('/dashboard', function() { return view('layouts.admin.partials.index', [
            'title' => 'Dashboard'
            ]);})->middleware('auth');

Route::get("/user/create", [RegisterController::class, "create"]);
Route::delete("/user/{id}", [RegisterController::class, "destroy"]);

Route::post('/logout', [UserController::class, 'logout']);
