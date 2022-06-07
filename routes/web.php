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

Route::get('/signup', function () {
    return view('register');
})->name('signup');


// AUTHENTICATED
Route::group(['middleware' => ['auth', 'role:Admin,Customer']], function () {
    Route::get('/profile', function () {
        return view('profile', ['title' => 'Profile']);
    })->name('profile');

    Route::get('/myorders', function () {
        return view('myorders', ['title' => 'MyOrders']);
    })->name('myorders');

    Route::get('/cart', function () {
        return view('shop-cart', ['title' => 'Shop']);
    });

    Route::get('/checkout', function () {
        return view('checkout', ['title' => 'Shop']);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ADMIN
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/test', function () {
        return view('welcome');
    });
});

// UNAUTHORIZED
Route::get('/unauthorized', function () {
    return view('401', ['title' => '401']);
})->name('unauthorized');

// NOT FOUND
Route::fallback(function () {
    return view('404', ['title' => '404']);
});
