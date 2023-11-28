<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderControler;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductImageController;

Route::group(['prefix' => 'admin' ], function () {

   Route::get('login', [AdminController::class, 'login'])->name('admin.login');
   Route::post('login-action', [AdminController::class, 'login_action']);

   Route::middleware(['admin.auth', 'prevent-back-history'])->group(function () {
      Route::get('logout', [AdminController::class, 'logout']);
      Route::get('dashboard', [AdminController::class, 'dashboard']);
      Route::get('user-lists', [AdminController::class, 'user_list']);
      Route::get('user-edit/{id}', [AdminController::class, 'user_edit']);
      Route::post('user-edit-action', [AdminController::class, 'user_edit_action']);
      Route::post('user-soft-delete/{id}', [AdminController::class, 'user_soft_delete']);
      Route::post('user-restore-delete/{id}', [AdminController::class, 'user_restore_delete']);
      Route::resource('category', CategoryController::class);
      Route::resource('sub-category', SubCategoryController::class);
      Route::resource('product', ProductController::class);
      Route::post('get-subcategory', [ProductController::class, 'get_subcategory']);
      Route::resource('product-image', ProductImageController::class);
      Route::resource('coupon', CouponController::class);
      Route::resource('order', OrderControler::class);
   });

});

