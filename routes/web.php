<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('frontAnd')->group(function () {
    Route::get('/', 'HomeController@index')
        ->name('home');
    Route::get('/detail/{slug}', 'DetailsController@index')
        ->name('detail');
    Route::middleware((['auth', 'verified']))->group(function () {
        Route::post('/checkout/{id}', 'CheckoutController@index')
            ->name('checkout');
        Route::get('/checkout/{id}', 'CheckoutController@prosess')
            ->name('checkout-process');

        Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
            ->name('checkout-create');
        Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
            ->name('checkout-remove');
        Route::get('/succes/{id}', 'SuccesController@index')
            ->name('succes');
    });
});

Auth::routes(['verify' => true]);




Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::resource('travel-package', 'TravelPackgeController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });
