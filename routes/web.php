<?php

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

use App\Http\Controllers\TestingPaymentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/netopia/start', [TestingPaymentController::class, 'formForPaymentData'])->name('netopia.start');
Route::post('/netopia/card-redirect', [TestingPaymentController::class, 'cardRedirect'])->name('netopia.cardRedirect');
Route::get('/netopia/card-return', [TestingPaymentController::class, 'cardReturn'])->name('netopia.cardReturn');
Route::post('/netopia/card-confirm', [TestingPaymentController::class, 'cardConfirm'])->name('netopia.cardConfirm');

