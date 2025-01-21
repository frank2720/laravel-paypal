<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Payment\PaypalController;


Route::get('/',[UserController::class,'createTransaction'])->name('createTransaction');
Route::post('process-transaction',[PaypalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction',[PaypalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction',[PaypalController::class, 'cancelTransaction'])->name('cancelTransaction');