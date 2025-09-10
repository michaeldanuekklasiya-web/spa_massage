<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// Services Page
Route::get('/massage', function () {
    return view('services');
})->name('services');

// Therapists Page
Route::get('/terapis', function () {
    return view('therapists');
})->name('therapists');

// Blog Page
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Contact Page
Route::get('/kontak', function () {
    return view('contact');
})->name('contact');

// Booking Page
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
