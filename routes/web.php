<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop/detail', function () {
    return view('shop-detail');
});
Route::get('/cart', function () {
    return view('shop-cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});


// guest

// admin

// admin + customer
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
