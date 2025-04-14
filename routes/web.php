<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!nova).*$');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/jewels', [App\Http\Controllers\JewelsController::class, 'getJewels'])->name('Jewels');
