<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\JewelsController;
use App\Http\Controllers\JewelSearchController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JewelsSearchController;

Route::middleware('web')->group(function () {
    Auth::routes();
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Auth::routes();
    Route::get('/jewels', [JewelsController::class, 'getJewels'])->name('jewels');
    Route::get('/favourites', [FavouritesController::class, 'getFavourites']);
    // Route::delete('/favourites', [FavouritesController::class, 'deleteFavourites']);


    Route::get('/purchase', [PurchaseController::class, 'getPurchase']);
    Route::get('/jewel/{id}', [JewelsController::class, 'getDetails']);


    // Route::post('/jewels/{id}', [PurchaseController::class, 'tobepurchased'])->middleware('auth');
    Route::post('/jewels/{id}', [JewelsController::class, 'tobepurchased'])->middleware('auth');
    Route::post('/jewel/{id}', [JewelsController::class, 'tobepurchased']);
    Route::get('jewels/search', [SearchController::class, 'searchJewels']);



    Route::post('/jewelsfav/{id1}', [FavouritesController::class, 'postFavourites'])->middleware('auth');


    Route::delete('/favourites/{id3}', [FavouritesController::class, 'deleteFavourites'])->middleware('auth');

    Route::delete('/purchase/{id4}', [JewelsController::class, 'deletePurchase'])->middleware('auth');


    Route::post('/email', [EmailController::class, 'emailstore']);


    Route::get('/SearchJewels', [JewelSearchController::class, 'index'])->name('SearchJewels');
    Route::post('create-item', [JewelSearchController::class, 'create'])->name('create-item');


    Route::get('/transaction', [PurchaseController::class, 'makeTransaction'])->middleware('auth');
    // Route::get('/transaction', [TranscationController::class, 'getTransactionDetails']);

    // Route::get('search', function () {
    //     $query = 'Necklace 1'; // <-- Change the query for testing.

    //     $jewel = App\Models\Jewel::search($query)->get();

    //     return $jewel;
    // });


});