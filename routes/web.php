<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/tentang-kami', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services')->name('services');
Route::view('/galeri', 'pages.gallery')->name('gallery');
Route::view('/kontak', 'pages.contact')->name('contact');
