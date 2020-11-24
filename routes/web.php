<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(app());
});

Route::get('main', function () {
   return 123;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ApplePay, Stripe, PayPall
Route::get('/pay', [\App\Http\Controllers\ProductPaymentsController::class, 'store']);

// Products Auth::user()->role === 'admin'
Route::post('products', [\App\Http\Controllers\ProductsController::class, 'store']);
Route::delete('products/{id}', [\App\Http\Controllers\ProductsController::class, 'destroy']);

//Add product to order
Route::post('products/{id}/order', [\App\Http\Controllers\ProductOrdersController::class, 'store']);

// Reviews
Route::get('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'index']);
Route::post('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'store']);

// Add/remove like to review
Route::post('liked-reviews', [\App\Http\Controllers\LikedReviewsController::class, 'store']);
Route::delete('liked-reviews/{id}', [\App\Http\Controllers\LikedReviewsController::class, 'destroy']);

//Add Wishlist
Route::post('products/{id}/wishlist', [\App\Http\Controllers\ProductWishListController::class, 'store']);

// Image cover Auth::user()->role === 'admin'
Route::put('products/{id}/image', [\App\Http\Controllers\ProductCoverImageController::class, 'update']);
