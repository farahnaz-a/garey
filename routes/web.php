<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
