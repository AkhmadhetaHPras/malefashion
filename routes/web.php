<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// guest
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop/detail', function () {
    return view('shop-detail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/signin', [LoginController::class, 'authenticate'])->name('signin');


// authenticate
Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/cart', function () {
        return view('shop-cart');
    });
    Route::get('/checkout', function () {
        return view('checkout');
    });
});

// admin

// customer
