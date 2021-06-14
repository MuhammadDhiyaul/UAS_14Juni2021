<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ImageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WelcomeUserController::class, 'index']);
Route::get('/about', [WelcomeUserController::class, 'about']);
Route::get('/kontak', [WelcomeUserController::class, 'kontak']);
Route::get('/product', [WelcomeUserController::class, 'product']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('product', ProductController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::get('laporan', [LaporanController::class, 'index']);
    Route::get('laporan/proses', [LaporanController::class, 'proses']);
    Route::get('image', [ImageController::class, 'index']);
    Route::post('image', [ImageController::class, 'store']);
    Route::delete('image/{id}', [ImageController::class, 'destroy']);

});

// shopping cart
Route::group(['middleware' => 'auth'], function() {
    // cart
    Route::resource('cart', 'CartController');
    Route::patch('kosongkan/{id}', 'CartController@kosongkan');
    // cart detail
    Route::resource('cartdetail', 'CartDetailController');
  });
