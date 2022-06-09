<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/signup', [RegisterController::class, 'index'])->name('signup');


// AUTHENTICATED
Route::group(['middleware' => ['auth', 'role:Admin,Customer']], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/myorders', function () {
        return view('myorders', ['title' => 'MyOrders']);
    })->name('myorders');

    Route::get('/cart', function () {
        return view('shop-cart', ['title' => 'Shop']);
    })->name('cart');

    Route::get('/checkout', function () {
        return view('checkout', ['title' => 'Shop']);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ADMIN
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard', ['title' => 'Dashboard']);
    })->name('dashboard');
});

// AJAX REQUEST
Route::group(['middleware' => ['ajax']], function () {
    // header component
    Route::post('/signup', [RegisterController::class, 'register']);
    Route::post('/signin', [LoginController::class, 'authenticate']);

    // profile page
    Route::get('/profile-fetch', [ProfileController::class, 'fetch']);
    Route::put('/profile-credentials/{id}', [ProfileController::class, 'updatecredentials']);
    Route::post('/address', [ProfileController::class, 'newaddress']);
    Route::delete('/address/{id}', [ProfileController::class, 'deladdress']);
});

// UNAUTHORIZED
Route::get('/unauthorized', function () {
    return view('401', ['title' => '401']);
})->name('unauthorized');

// NOT FOUND
Route::fallback(function () {
    return view('404', ['title' => '404']);
});
