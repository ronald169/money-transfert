<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PaymentController;

Route::get('/', function () {
    return view('front.welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('currency-change', function () {
    return view('front.change.current-change');
})->name('currency-change');

Route::prefix('transfert')->middleware('auth')->group(function () {
    Route::post('send', [PaymentController::class, 'send'])->name('send-money');
    Route::post('confirm', [PaymentController::class, 'checkSend'])->name('confirm-money');
});
