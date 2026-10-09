<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'welcome')->name('home');

// Route::get('/menu', [MenuController::class, 'index']);
// Route::get('/menu/{id}', [MenuController::class, 'show']);
// Route::post('/menu', [MenuController::class, 'store']);

Route::get('/menu', function () {
    return Inertia::render('menu');
});