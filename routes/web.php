<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;

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

// Route::prefix('/')->group(function(){
//     Route::get('/', function () {
//         return view('login');
//     })->name('login');
//     Route::get('/register', [RegisterController::class, 'index'])->name('register');
//     Route::post('/register', [RegisterController::class, 'create'])->name('register');
// });
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);




Route::prefix('/homepage')->middleware(['auth','user'])->group(function(){
    Route::get('/',[HotelController::class, 'index'])->name('homepage'); //menapilkan hotel yang tersedia
    Route::get('/{idhotel}/orderhotel',[OrderController::class, 'index'])->name('detailhotel');
    Route::put('/{idhotel}/orderhotel',[OrderController::class, 'order'])->name('order');
    Route::get('/{idorder}/payment',[OrderController::class, 'payment'])->name('payment');
    Route::post('/{idorder}/payment',[OrderController::class, 'paid'])->name('paid');
    Route::get('/onprogress',[UserController::class, 'onprogress'])->name('onprogress');
    Route::get('/verivy',[UserController::class, 'verivy'])->name('verivy');
    Route::get('/history',[UserController::class, 'history'])->name('history');
    Route::get('/1',[UserController::class, 'orderhotel'])->name('wishlist');
});


// hotel

// pemesanan hotel

// super admin


Route :: prefix('superadmin')->middleware(['auth','superadmin'])->group(function () {
    Route::get('/',[SuController::class, 'index'])->name('dashboard');
    Route::post('/',[SuController::class, 'create']);
    Route::get('/{iduser}/delete',[SuController::class, 'hapus'])->name('hapus');
    Route::get('/{iduser}/suedithotel',[SuController::class,'suedithotel'])->name('suedithotel');
    Route::post('/suupdate',[SuController::class, 'suupdate'])->name('suupdate');
});
// Route::get('superadmin',[SuController::class, 'index']);
// Route::post('superadmin',[SuController::class, 'create']);

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::post('/',[AdminController::class,'tambahkamar']);
    // Route::get('/{idhotel}/edithotel',[AdminController::class,'edithotel'])->name('adminedithotel');
    Route::get('/edithotel',[AdminController::class,'edithotel'])->name('adminedithotel');
    Route::post('/edithotel',[AdminController::class, 'update']);
    Route::get('/onprogress',[AdminController::class, 'onprogress'])->name('adminonprogress');
    Route::get('/verivy',[AdminController::class, 'verivy'])->name('adminverivy');
    Route::get('/{idorder}/verivy',[AdminController::class, 'verivied'])->name('adminverivied');
    Route::post('/{idorder}/verivy',[AdminController::class, 'verivied'])->name('adminverivied');
    Route::get('/history',[AdminController::class, 'history'])->name('adminhistory');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');