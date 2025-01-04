<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrondController;
use Illuminate\Support\Facades\Route;





Route::controller(FrondController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/movie', 'movie')->name('movie');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/tv_show', 'tv_show')->name('tv_show');
    Route::get('/movie-details', 'mobie_details')->name('mobie_details');
    Route::get('/blog-details', 'blog_details')->name('blog_details');



});
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {


    Route::controller(AdminController::class)->group(function () {

        Route::get('/dashboard', 'home')->name('admin.home');
        Route::get('/blog-show', 'blog_show')->name('admin.blog_show');
        Route::get('/blog-create', 'blog_create')->name('admin.blog_create');
        Route::get('/contact-show', 'contact_show')->name('admin.contact_show');
        Route::get('/user-show', 'user_show')->name('admin.user_show');


    });
    Route::controller(BlogController::class)->group(function () {
        // Route::get('/blog_create', 'about_show')->name('admin.about_show');
        // Route::get('/blog_update', 'about_show')->name('admin.about_show');
        // Route::get('/blog_show', 'about_show')->name('admin.about_show');
    });


});