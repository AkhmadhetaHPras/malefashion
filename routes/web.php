<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Dashboard Admin Routes
Route::get('/dashboard', function () {
    return view('admin.dashboard',['title' => 'Dashboard']);
})->name('dashboard');

Route::get('/analitycs-profit', function () {
    return view('admin.an-profit',['title' => 'Analytics-Profit']);
})->name('analytics-profit');

Route::get('/analitycs-sales', function () {
    return view('admin.an-sales',['title' => 'Analytics-Sales']);
})->name('analytics-sales');

Route::get('/analitycs-statistics', function () {
    return view('admin.an-statistics',['title' => 'Analytics-Statistics']);
})->name('analytics-statistics');

Route::get('/orders-add', function () {
    return view('admin.app-order-add',['title' => 'Orders-Add']);
})->name('orders-add');

Route::get('/orders-listall', function () {
    return view('admin.app-order-list',['title' => 'Orders-ListAll']);
})->name('orders-listall');

Route::get('/orders-view', function () {
    return view('admin.app-order-view',['title' => 'Orders-View']);
})->name('orders-view');

Route::get('/orders-edit', function () {
    return view('admin.app-order-edit',['title' => 'Orders-Edit']);
})->name('orders-edit');


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

Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.register');


// AUTHENTICATED
Route::group(['middleware' => ['auth', 'role:Admin,Customer']], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile-fetch', [ProfileController::class, 'fetch'])->name('profile.fetch');

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

