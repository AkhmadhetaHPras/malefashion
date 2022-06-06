<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// guest
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');
Route::get('/shop', function () {
    return view('shop', ['title' => 'Shop']);
})->name('shop');
Route::get('/shop/detail', function () {
    return view('shop-detail', ['title' => 'Shop']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
Route::post('/signin', [LoginController::class, 'authenticate'])->name('signin');


// authenticate
Route::group(['middleware' => ['auth', 'role:Admin,Customer']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/cart', function () {
        return view('shop-cart', ['title' => 'Shop']);
    });
    Route::get('/checkout', function () {
        return view('checkout', ['title' => 'Shop']);
    });
});

// admin
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/test', function () {
        return view('welcome');
    });
});

// unauthorized
Route::get('/unauthorized', function () {
    return view('401', ['title' => '401']);
})->name('unauthorized');

// not found
Route::fallback(function () {
    return view('404', ['title' => '404']);
});
