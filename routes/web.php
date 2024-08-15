<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;

Route::get('/', [ShopController::class, 'index']);
    Route::get('/search', SearchController::class);

Route::controller(ShopController::class)->group(function () {
    Route::get('/shop', 'shop');
    Route::get('/shop-garden', 'garden');
    Route::get('/shop-materials', 'materials');
    Route::get('/shop-tools', 'tools');
    Route::get('/shop-decor', 'decor');
});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'cart']);
    Route::post('/cart', [CartController::class, 'addToCart']);

    Route::patch('/admin/increment/{cartItem}', [CartController::class, 'incrementQuantity']);
    Route::patch('/admin/decrement/{cartItem}', [CartController::class, 'decrementQuantity']);

    Route::delete('/cart/{cartItem}', [CartController::class, 'removeProduct']);
    Route::delete('/cart', [CartController::class, 'removeAllProducts']);
    
    Route::post('/index', [CartController::class, 'buy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'register']);
    
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [LoginController::class, 'destroy']);
    Route::get('/user', [cartController::class, 'user']);
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'admin');

    Route::get('/admin-create', 'create');
    Route::post('/admin', 'store');

    Route::get('/admin/{product}/admin-edit', 'edit');
    Route::patch('/admin/{product}', 'update');

    Route::delete('/admin/{product}', 'delete');
});