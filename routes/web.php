<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PaymentController;

Route::get('/', function () {
    return view('payment.welcome');
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
    Route::post('success', [PaymentController::class, 'success'])->name('success-money');
});

Route::name('transaction')->get('transaction', function() {
    return view('front.transaction');
});

    // Page
Route::name('about')->get('about', function() {
    return view('front.about');
});
Route::name('faq')->get('faq', function() {
    return view('front.help');
});
Route::name('contact')->get('contact', function() {
    return view('front.contact');
});

Route::name('help')->get('help', function() {
    return view('front.help');
});


Route::middleware('auth')->group(function () {

    Route::name('notification')->get('notification', function() {
        return view('front.notification');
    });

    Route::name('account')->get('account', function() {
        return view('front.account');
    });

    Route::name('security')->get('security', function() {
        return view('front.security');
    });

    Route::name('payment')->get('payment', function() {
        return view('front.payment');
    });

    Route::name('notification-change')->get('notification-change', function() {
        return view('front.notification-change');
    });
});

Route::get('paiment', function () {
    return view('payment.welcome');
});
