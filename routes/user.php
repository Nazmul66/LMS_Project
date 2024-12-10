<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;


Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth','IsUser']], function () {

    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    // Route::get('/my-course', [UserDashboardController::class, 'my_course'])->name('myCourse');
    Route::get('/order', [UserDashboardController::class, 'order'])->name('order');
    Route::get('/course-details/{id}', [UserDashboardController::class, 'course_details'])->name('course.details');
    Route::get('/course-module/{id}', [UserDashboardController::class, 'course_module'])->name('course.module');
    Route::get('/course-videos/{id}/{slug}', [UserDashboardController::class, 'course_videos'])->name('course.videos');

    Route::get('/user-profile', [UserDashboardController::class, 'user_profile'])->name('user.profile');
    Route::post('/user-update', [UserDashboardController::class, 'user_update'])->name('user.update');
    Route::post('/user-password-change', [UserDashboardController::class, 'user_password_change'])->name('user.password.change');

});