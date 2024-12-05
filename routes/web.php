<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;

// Halaman utama
Route::get('/', function () {
    $data = [
        'content' => 'home.home.index'
    ];
    return view('home.layouts.wrapper', $data);
});

// Halaman packages, blog, contact
Route::get('/packages', function () {
    $data = [
        'content' => 'home.packages.index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/blog', function () {
    $data = [
        'content' => 'home.blog.index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', function () {
    $data = [
        'content' => 'home.contact.index'
    ];
    return view('home.layouts.wrapper', $data);
});



// Signup
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Booking
Route::get('/booking', [BookingController::class, 'create'])->middleware('auth')->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->middleware('auth')->name('booking.store');
