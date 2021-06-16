<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaypalController2;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('paywithpaypal');
});


Route::get('payment', [PaymentController::class,'index']);
Route::post('charge', [PaymentController::class,'charge']);
Route::get('paymentsuccess', [PaymentController::class,'payment_success']);
Route::get('paymenterror', [PaymentController::class,'payment_error']);

