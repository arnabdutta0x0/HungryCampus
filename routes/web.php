<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\CodeValidation;
use App\Http\Controllers\StripeController;


// Routes that do not require authentication
Route::get('/', function () {
    return view('signpage');
})->name('signpage');


Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');


Route::post('/verify-code', [StripeController::class, 'verifyCode'])->name('verifyCode');
Route::match(['GET', 'POST'], '/order-confirm', [StripeController::class, 'orderConfirm'])->name('orderConfirm');


Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/main', [UserController::class, 'profileShow'])->name('main');
    Route::post('/main', [UserController::class, 'profileUpdate'])->name('main.update');
    Route::get('/admin', [UserController::class, 'profileShowAdmin'])->name('admin');
    Route::get('/profileShow', [UserController::class, 'profileShow'])->name('profileShow');
});