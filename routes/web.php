<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebController::class, 'Welcome']);

Route::group(['prefix' => '/admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('admin.home');
    Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);
});
Auth::routes([
    // 'register' => false,
    // 'confirm' => false,
]);
