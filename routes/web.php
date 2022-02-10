<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;


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

Route::get('/', [loginController::class, 'index']);
Route::get('/registrasi', [loginController::class, 'create']);
Route::post('/registrasi', [loginController::class, 'store']);
Route::post('/sigIn', [loginController::class, 'sigIn']);
Route::get('/customer', [customerController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
//product
Route::get('/product', [productController::class, 'index']);
Route::get('/createproduct', [productController::class, 'create']);
Route::post('/product', [productController::class, 'store']);
//categorie
Route::resource('category', CategoryController::class);