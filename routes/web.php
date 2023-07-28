<?php

use App\Http\Controllers\dashboard\DashboardPageController;
use App\Http\Controllers\dashboard\Products\CategoryController;
use App\Http\Controllers\dashboard\Products\ProductController;
use App\Http\Controllers\website\AboutUsPageController;
use App\Http\Controllers\website\HomePageController;
use App\Http\Controllers\website\NewsPageController;
use App\Http\Controllers\website\ProductPageController;
use App\Http\Controllers\website\SolutionsPageController;
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

//---------------- Website ---------------- //
Route::get('/', [HomePageController::class, 'index'])->name('website.home');
Route::get('about', [AboutUsPageController::class, 'index'])->name('website.about');

//Route::get('/products', [ProductPageController::class, 'index'])->name('website.products');
Route::get('/products/{category}', [ProductPageController::class, 'index'])->name('website.products');
Route::get('/product/{id}', [ProductPageController::class, 'details'])->name('website.product.details');

Route::get('/solutions', [SolutionsPageController::class, 'index'])->name('website.solutions');
Route::get('/news', [NewsPageController::class, 'index'])->name('website.news');
//---------------- End of Website ---------------- //

//---------------- Dashboard ---------------- //



Route::group(['prefix' => 'dashboard'], function () {

Route::get('/index', [DashboardPageController::class, 'index'])->name('dashboard.home');

    Route::get('/products/index', [ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('/products/data', [ProductController::class, 'getProductsData'])->name('dashboard.products.data');
    Route::get('/products/create', [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('dashboard.products.update');
    Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');

    Route::get('/categories/index', [CategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('dashboard.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.categories.edit');
    Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

});

