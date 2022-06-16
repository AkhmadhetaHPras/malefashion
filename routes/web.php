<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Route;


// ========================== ************ ===========================

// guest
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/{product:slug}', [ProductController::class, 'show'])->name('shop.details');
Route::get('/shop/brand/{brand:name}', [ProductController::class, 'brandfilter'])->name('shop.brandfilter');
Route::get('/shop/category/{category:category}', [ProductController::class, 'categoryfilter'])->name('shop.categoryfilter');

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

    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::get('/checkout', function () {
        return view('checkout', ['title' => 'Shop']);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// ADMIN
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    // Dashboard Admin Routes
    Route::get('/dashboard', function () {
        return view('admin.dashboard', ['title' => 'Dashboard']);
    })->name('dashboard');

    // Analytics Route
    Route::prefix('analitycs')->group(function () {
        Route::get('/profit', function () {
            return view('admin.an-profit', ['title' => 'Analytics-Profit']);
        })->name('analytics-profit');

        Route::get('/sales', function () {
            return view('admin.an-sales', ['title' => 'Analytics-Sales']);
        })->name('analytics-sales');

        Route::get('/statistics', function () {
            return view('admin.an-statistics', ['title' => 'Analytics-Statistics']);
        })->name('analytics-statistics');
    });

    // Order Routes
    Route::prefix('orders')->group(function () {
        Route::get('/add', function () {
            return view('admin.app-order-add', ['title' => 'Orders-Add']);
        })->name('orders-add');

        Route::get('/listall', function () {
            return view('admin.app-order-list', ['title' => 'Orders-ListAll']);
        })->name('orders-listall');

        Route::get('/view', function () {
            return view('admin.app-order-view', ['title' => 'Orders-View']);
        })->name('orders-view');

        Route::get('/edit', function () {
            return view('admin.app-order-edit', ['title' => 'Orders-Edit']);
        })->name('orders-edit');
    });

    //Product Routes 
    Route::prefix('products')->group(function () {
        Route::get('/add', function () {
            return view('admin.app-product-add', ['title' => 'Products-Add']);
        })->name('products-add');

        Route::get('/listall', function () {
            return view('admin.app-product-list', ['title' => 'Products-ListAll']);
        })->name('products-listall');

        Route::get('/view', function () {
            return view('admin.app-product-view', ['title' => 'Products-View']);
        })->name('products-view');

        Route::get('/edit', function () {
            return view('admin.app-product-edit', ['title' => 'Products-Edit']);
        })->name('products-edit');
    });

    //User Routes 
    Route::prefix('users')->group(function () {
        Route::get('/add', function () {
            return view('admin.app-user-add', ['title' => 'Users-Add']);
        })->name('users-add');

        Route::get('/listall', function () {
            return view('admin.app-user-list', ['title' => 'Users-ListAll']);
        })->name('users-listall');

        Route::get('/view', function () {
            return view('admin.app-user-view', ['title' => 'Users-View']);
        })->name('users-view');

        Route::get('/edit', function () {
            return view('admin.app-user-edit', ['title' => 'Users-Edit']);
        })->name('users-edit');
    });

    // Under maintenance Page Route
    Route::get('/404-error', function () {
        return view('admin.under-maintenance', ['title' => '404-error']);
    })->name('404-error');
});

// AJAX REQUEST
Route::group(['middleware' => ['ajax']], function () {
    // header component
    Route::post('/signup', [RegisterController::class, 'register']);
    Route::post('/signin', [LoginController::class, 'authenticate']);

    // shop page
    Route::post('/cart/{id}', [CartController::class, 'addtocart']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::delete('/cart/{id}', [CartController::class, 'delete']);
    Route::get('/cart-fetch', [CartController::class, 'fetch']);

    // shop detail page
    Route::get('/stock-fetch/{id}', [VariantController::class, 'getstock']);

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
