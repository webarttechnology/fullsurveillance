<?php

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


Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about-us', 'about_us');
    Route::get('/service', 'service');
    Route::get('/contact', 'contact');
    Route::get('/product', 'product');
    Route::get('/shop', 'shop');
    Route::get('/item/{id}', 'item');



    Route::get('/login-register', 'login_register');
    Route::post('/register-action', 'register_action');
    Route::post('/login-action', 'login_action');
    Route::get('/logout', 'logout');
});






