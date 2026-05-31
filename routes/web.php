<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/services', function () {
    return view('pages.service');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/testimonials', function () {
    return view('pages.testimonial');
});

Route::get('/404', function () {
    return view('pages.404');
});


Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');

// Route::post('/search', action: [ProductController::class, 'SearchProduct']);
