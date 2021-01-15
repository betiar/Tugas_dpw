<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



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

/*LANDING PAGE LARAVEL*/
Route::get('/', function(){return view('welcome');});

/*CLIENT*/
Route::get('index', [ClientController::class, 'index']);
Route::get('checkout', [ClientController::class, 'checkout']);
Route::get('shop', [ClientController::class, 'shop']);
Route::get('test', [ClientController::class, 'test']);
Route::get('detail', [ClientController::class, 'detail']);
Route::get('cart', [ClientController::class, 'cart']);
Route::get('client/{client}', [ClientController::class, 'show']);

/*AUTHENTICATION*/
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);

/*RESOURCED ROUTER, PREFIX & GROUPING*/
Route::prefix('admin')->middleware('auth')->group(function(){
	/*HOME*/
	Route::resource('beranda', HomeController::class);
	/*KATEGORI*/
	Route::resource('kategori', KategoriController::class);
	/*PRODUK*/
	Route::resource('produk', ProdukController::class);
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	/*USER*/
	Route::resource('user', UserController::class);
});


