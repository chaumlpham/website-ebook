<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DanhmucEbookController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;


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

Route::get('/', [IndexController::class,'home'])->name('trang-chu');
Route::get('/all-ebook', [IndexController::class, 'all_ebook']);
Route::get('/danh-muc/{slug}', [IndexController::class, 'danhmuc']);
Route::get('/doc-ebook/{slug}', [IndexController::class,'docebook'])->name('doc-ebook');
Route::post('/tim-kiem', [IndexController::class, 'timkiem']);
Route::post('/timkiem-ajax', [IndexController::class, 'timkiem_ajax']);

Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhmucEbookController::class);
Route::resource('/ebook', EbookController::class);
Route::resource('/user', UserController::class);
Route::get('/phan-vai-tro/{id}', [UserController::class, 'phanvaitro']);
Route::post('/insert-roles/{id}', [UserController::class, 'insertroles']);
