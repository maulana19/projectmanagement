<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Load Pages
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'allProject']);
