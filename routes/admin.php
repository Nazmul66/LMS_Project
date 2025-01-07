<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseModuleController;
use App\Http\Controllers\Admin\CourseVideoController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TestimonialController;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth','IsAdmin']], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Admin
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::post('/update', [AdminController::class, 'admin_update'])->name('update');
        Route::post('/password-change', [AdminController::class, 'password_change'])->name('password.change');
    });

    // Contacts
    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('{id}/view', [ContactController::class, 'view'])->name('view');
        Route::get('{id}/delete', [ContactController::class, 'delete'])->name('delete');
        Route::post('/toggle-status', [ContactController::class, 'toggleStatus'])->name('toggleStatus');
    });

    // Testimonials
    Route::group(['prefix' => 'testimonials', 'as' => 'testimonials.'], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [TestimonialController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete');
    });


    // Banner
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('{id}/view', [BannerController::class, 'view'])->name('view');
        Route::post('{id}/update', [BannerController::class, 'update'])->name('update');
        Route::get('{id}/delete', [BannerController::class, 'delete'])->name('delete');
    });

    // Order
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/update/{order_id}', [OrderController::class, 'update'])->name('update');
    });


    // Course
    Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/create', [CourseController::class, 'create'])->name('create');
        Route::post('/store', [CourseController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [CourseController::class, 'view'])->name('view');
    });


    // Course Module
    Route::group(['prefix' => 'course_module', 'as' => 'course_module.'], function () {
        Route::get('/{course_id}', [CourseModuleController::class, 'index'])->name('index');
        Route::get('/{course_id}/create', [CourseModuleController::class, 'create'])->name('create');
        Route::post('/store', [CourseModuleController::class, 'store'])->name('store');
        Route::get('/{course_id}/edit/{id}', [CourseModuleController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CourseModuleController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CourseModuleController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [CourseModuleController::class, 'view'])->name('view');
    });


    // Course Videos
    Route::group(['prefix' => 'course_video', 'as' => 'course_video.'], function () {
        Route::get('/{course_module_id}', [CourseVideoController::class, 'index'])->name('index');
        Route::get('/{course_module_id}/create', [CourseVideoController::class, 'create'])->name('create');
        Route::post('/store', [CourseVideoController::class, 'store'])->name('store');
        Route::get('/{course_module_id}/edit/{id}', [CourseVideoController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CourseVideoController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CourseVideoController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [CourseVideoController::class, 'view'])->name('view');
    });


    // setting
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/general-setting', [GeneralSettingController::class, 'general_setting'])->name('general.setting');
        Route::post('general/store', [GeneralSettingController::class, 'generalStore'])->name('general_store');
    });


});