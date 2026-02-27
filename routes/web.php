<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/data', [PageController::class, 'data'])->name('data');
Route::get('/portofolio/{slug}', [PageController::class, 'project_show'])->name('project_show');