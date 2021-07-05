<?php

use Illuminate\Support\Facades\Route;

// Route::redirect('/','login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
