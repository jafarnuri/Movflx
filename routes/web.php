<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrondController;
use App\Http\Controllers\MovController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::controller(FrondController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/movie', 'movie')->name('movie');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/tv_show', 'tv_show')->name('tv_show');
    Route::get('/movie-details', 'mobie_details')->name('mobie_details');
    Route::get('/blog-details/{id}', 'blog_details')->name('blog_details');

});
Route::controller(BlogController::class)->group(function () {
    Route::post('/blogs/{id}/like', 'like')->name('blog.like');
    Route::post('//blogs/{id}/unlike', 'unlike')->name('blogs.unlike');

});
Route::controller(CommentController::class)->group(function () {
    Route::post('/blog-comment/{blog_id}', 'store')->name('comment_store');
});
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::post('/new-contact', [ContactController::class, 'new_contact'])->name('new_contact');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::controller(AdminController::class)->group(function () {

        Route::get('/dashboard', 'home')->name('admin.home');
        Route::get('/user-show', 'user_show')->name('admin.user_show');
        Route::get('/register', 'register')->name('admin.register');

    });
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/social-show', 'social_show')->name('admin.social_show');
        Route::post('/social-update', 'social_update')->name('admin.social_update');
        Route::get('/communication-show', 'communication_show')->name('admin.communication_show');
        Route::post('/communication-update', 'communication_update')->name('admin.communication_update');
        Route::get('/about-show', 'about_show')->name('admin.about_show');
        Route::put('/about-update', 'about_update')->name('admin.about_update');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::post('/register_user', 'register_user')->name('admin.register_user');
        // İstifadəçi silmək üçün testik kodu göndərmək
        Route::get('user/send-confirmation-email/{id}', 'sendConfirmationEmail')
            ->name('admin.user.send_confirmation_email');
        // İstifadəçi silməni təsdiq etmək üçün formu göndərmək
        Route::post('user/confirm-delete/{id}', 'confirmDelete')
            ->name('admin.user.confirm_delete');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/movcategory-show', 'movcategory')->name('admin.movcategory');
        Route::get('/movcategory-create', 'movcategory_create')->name('admin.movcategory_create');
        Route::post('/movcategory-store', 'movcategory_store')->name('admin.movcategory_store');
        Route::get('/movcategory-delete/{id}', 'mov_category_delete')->name('admin.mov_category_delete');
        Route::get('/blogcategory-show', 'blogcategory')->name('admin.blogcategory');
        Route::get('/blogcategory-create', 'blogcategory_create')->name('admin.blogcategory_create');
        Route::get('/blogcategory-delete/{id}', 'blog_category_delete')->name('admin.blog_category_delete');
        Route::post('/blogcategory-store', 'blogcategory_store')->name('admin.blogcategory_store');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog-show', 'blog_show')->name('admin.blog_show');
        Route::get('/blog-create', 'blog_create')->name('admin.blog_create');
        Route::post('/blog-store', 'blog_store')->name('admin.blog_store');
        Route::get('/blog-delete/{id}', 'delete')->name('admin.blog_delete');
        Route::get('/blog-edit/{id}', 'blog_edit')->name('admin.blog_edit');
        Route::put('/blog-update/{id}', 'blog_update')->name('admin.blog_update');
       
    });

    Route::controller(MovController::class)->group(function () {
        Route::get('/mov-show', 'mov_show')->name('admin.mov_show');
        Route::get('/mov-create', 'mov_create')->name('admin.mov_create');
        Route::post('/mov-store', 'mov_store')->name('admin.mov_store');
        Route::get('/mov-update/{id}', 'mov_update')->name('admin.mov_update');
        Route::get('/mov-delete/{id}', 'mov_delete')->name('admin.mov_delete');
        Route::post('/mov-edit/{id}', 'mov_edit')->name('admin.mov_edit');
       
    });

    Route::get('/contact-show', [ContactController::class, 'contact_show'])->name('admin.contact_show');
    Route::get('/contact-delete{id}', [ContactController::class, 'contact_delete'])->name('admin.contact_delete');
    Route::post('/mark-as-read/{id}', [ContactController::class, 'markAsRead'])->name('admin.mark-as-read');


});
