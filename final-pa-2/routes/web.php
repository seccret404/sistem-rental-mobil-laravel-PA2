<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AdministrasiController;

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
//guest
    Route::get('/login',[AuthController::class,'index'])->name('login')->middleware('guest');
    Route::post('/loginlah',[AuthController::class,'loginlah']);
    Route::post('/logout', [AuthController:: class, 'logout']);
    Route::get('/register',[RegisterController::class,'register']);
    Route::post('/registered',[RegisterController::class,'registered']);
    Route::get('/',[PageController::class,'home']);
    Route::get('/list',[PageController::class,'list']);
    Route::get('/about',[PageController::class,'about']);

//guest-end

//auth
Route::middleware(['auth', 'role:admin'])->group(function () {
        //dashboard
        Route::get('/admin',[AdminController::class,'index']);

        //mobil-process
        Route::get('/mobil',[MobilController::class,'mobil']);
        Route::post('/mobiladd',[MobilController::class,'mobiladd']);
        Route::get('/mobil/edit/{id_mobil}',[MobilController::class, 'edit']);
        Route::post('/mobil/edit/{id_mobil}',[MobilController::class,'editpros']);
        Route::post('/mobil/{id_mobil}/delete', [MobilController::class, 'delete']);

        //administrasi-process
        Route::get('/administrasi',[AdministrasiController::class,'administrasi']);
        Route::post('/administrasiadd',[AdministrasiController::class,'adpros']);
        Route::get('/admin/edit/{id}',[AdministrasiController::class, 'edit']);
        Route::post('/admin/edit/{id}',[AdministrasiController::class,'editpros']);
        Route::post('/admin/{id}/delete', [AdministrasiController::class, 'delete']);

        //testimoni-process
        Route::get('/testimoni',[AdminController::class,'testimoni']);
        Route::post('/testimoni/{id}/delete', [AdminController::class, 'deletetes']);
        Route::post('/testimoni-add',[TestimoniController::class, 'addtestimoni']);

        //feedback-process
        Route::get('/feedback',[AdminController::class,'feed']);
        Route::post('/feedback/{id_feed}/delete', [AdminController::class, 'delete']);

        //pemesanan
        Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
        Route::get('/pemesanan/{id}', [PemesananController::class, 'detail'])->name('detail.pemesanan');
        Route::post('/pemesanan-status/{idPemesanan}', [PemesananController::class, 'status'])->name('status.pemesanan');

        Route::get('/pdf', [AdministrasiController::class, 'pdf']);

});

Route::middleware(['auth', 'role:user'])->group(function () {


        Route::get('/contact',[PageController::class,'contact']);

        //add-feedback
        Route::post('/adfed',[PageController::class,'adfed']);

        //rental-mobil
        Route::get('/booking/{id_mobil}',[BookingController::class, 'index']);
        Route::post('/booking/proses',[BookingController::class, 'addbooking']);

});
//end-auth
