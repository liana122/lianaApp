<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;
use App\Models\customer;

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
Route::get('/dashboard', [DashboardController::class, 'index']);
//cutomers
Route::resource('customer', customerController::class);
//product
Route::resource('product', productController::class);
//categorie
Route::resource('category', CategoryController::class);