<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

//Load Pages
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'allProject']);
Route::get('/active-project', [HomeController::class, 'activeProject']);
Route::get('/new-project', [HomeController::class, 'newProject']);
Route::get('/login',[LoginController::class, 'index']);
