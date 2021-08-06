<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CustomLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/sub-categories', [FrontendController::class, 'subCategories'])->name('frontend.subCategories');
Route::get('/products', [FrontendController::class, 'products'])->name('frontend.products');
Route::get('/product/by/{id}/category', [FrontendController::class, 'productbycategory'])->name('frontend.productbycategory');
Route::get('/product/by/{id}/subcategory', [FrontendController::class, 'productbysubcategory'])->name('frontend.productbysubcategory');
Route::get('/product/{id}/details', [FrontendController::class, 'productDetails'])->name('frontend.productDetails');
Route::get('/search', [FrontendController::class, 'search'])->name('frontend.search');
Route::post('/filter-search', [FrontendController::class, 'filterSearch'])->name('frontend.filtersearch');
Route::post('/price-search', [FrontendController::class, 'priceSearch'])->name('frontend.pricesearch');
Route::get('/lth', [FrontendController::class, 'lth'])->name('frontend.lth');
Route::get('/htl', [FrontendController::class, 'htl'])->name('frontend.htl');
Route::get('/otn', [FrontendController::class, 'otn'])->name('frontend.otn');
Route::get('/nto', [FrontendController::class, 'nto'])->name('frontend.nto');


// Cart Controller 
Route::any('/cart-save', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/dokaner/list', [CartController::class, 'list'])->name('cart.list');
Route::get('/cart/{coupon_name}', [CartController::class, 'index']);
Route::get('/cart/{cart_id}/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.custom.update');

// CheckoutController 
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout-store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/dashboard', [CustomerController::class, 'index'])->name('dashboard');

// LoginController 
Route::post('/custom-login', [CustomLoginController::class, 'login'])->name('custom.login');
Route::post('/custom-register', [CustomLoginController::class, 'register'])->name('custom.register');
