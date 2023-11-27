<?php

use App\Http\Controllers\CartControler;
use App\Http\Controllers\CheckoutControler;
use App\Http\Controllers\UserController;
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


////// User

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about-us', 'about_us');
    Route::get('/service', 'service');
    Route::get('/contact', 'contact');
    Route::get('/product', 'product');
    Route::get('/shop', 'shop');
    Route::get('/item/{id}', 'item');


    Route::get('/login-register', 'login_register')->name('login');
    Route::post('/register-action', 'register_action');
    Route::post('/login-action', 'login_action');
    Route::post('/get-product-view', 'get_product_view');

    Route::middleware(['auth', 'prevent-back-history'])->group(function () {
        Route::get('/logout', 'logout');
    });
});


/////// Shopping Cart & Wishlist 

Route::controller(CartControler::class)->group(function () {
    Route::post('/add-cart', 'add_cart');
    Route::post('/update-remove-cart', 'update_remove_cart');
    Route::post('/total-cart-count', 'total_cart_count');
    Route::post('/refresh-cart', 'refresh_cart');
    Route::get('/cart', 'cart');
    Route::post('/sub-grand-total-cart', 'sub_grand_total_cart');

    /////// Wishlist 
    Route::post('/add-wishlist', 'add_wishlist');
    Route::get('/wishlist', 'wishlist');
    Route::post('/total-wishlist-count', 'total_wishlist_count');
    Route::post('/cart-total-amount', 'cart_total_amount');

});



//////  Checkout 

Route::controller(CheckoutControler::class)->group(function () {
    Route::middleware(['auth', 'prevent-back-history'])->group(function () {
        Route::get('/chekout', 'chekout');
        Route::post('/apply-coupon', 'apply_coupon');
    });
});







