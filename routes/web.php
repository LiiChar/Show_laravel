<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusketController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [ProductController::class, 'index']);

Route::get('/auth', [AuthController::class, 'create']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_create', [AuthController::class, 'store_create']);
Route::post('/store_login', [AuthController::class, 'store_login']);


Route::get('/busket', [BusketController::class, 'index']);
Route::get('/busket/pay', [BusketController::class, 'create']);
Route::get('/busket/{id}', [BusketController::class, 'store'])->middleware('auth.basic');

Route::get('/product/{id}', [ProductController::class, 'show'])->middleware('auth.basic');






