<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\ProductController;

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

Route::get('/', function () {
    return view('website.home');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('single', [ProductController::class, 'details']);
