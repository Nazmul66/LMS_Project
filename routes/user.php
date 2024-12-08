<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;


Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth','IsUser']], function () {

    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-course', [UserDashboardController::class, 'my_course'])->name('myCourse');

});