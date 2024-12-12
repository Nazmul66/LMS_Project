<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/course-details/{id}', 'course_details')->name('course-details');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/cart', 'cart')->name('cart');
        Route::post('/cart-store', 'cart_store')->name('cart.store');
        Route::get('/cart-delete/{id}', 'cart_delete')->name('cart.delete');
        Route::get('/checkout', 'checkout')->name('checkout')->middleware('noBack');
        Route::post('/order', 'order')->name('order');
        Route::get('/order-success/{orderId}', 'order_success')->name('order.success');
        Route::get('/email-order-success', 'email_order_success')->name('email.order.success');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/admin.php';
require __DIR__.'/user.php';
require __DIR__.'/auth.php';
