<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrondController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard/admin', [AdminController::class, 'home'])->name('admin.home');


Route::controller(FrondController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/movie', 'movie')->name('movie');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/tv_show', 'tv_show')->name('tv_show');



});

