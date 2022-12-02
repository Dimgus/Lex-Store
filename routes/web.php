<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::post('/dashboard/profile', [DashboardController::class, 'update'])->middleware('auth');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/order/{product_name}', [OrderController::class, 'index'])->middleware('auth');
Route::post('/product/order/{product_name}', [OrderController::class, 'order'])->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');
Route::delete('checkout/{id}', [CheckoutController::class, 'delete'])->middleware('auth');

Route::get('/confirm-checkout', [CheckoutController::class, 'confirm'])->middleware('auth');

Route::get('/history', [HistoryController::class, 'index'])->middleware('auth');
Route::get('/history/{id}', [HistoryController::class, 'detail']);