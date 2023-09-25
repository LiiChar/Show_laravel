<?php

use App\Http\Controllers\AuthController;
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
Route::post('/store', [AuthController::class, 'store']);

Route::get('/product/{id}', [ProductController::class, 'show'])->middleware('auth.basic');;




