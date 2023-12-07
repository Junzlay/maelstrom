<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/service', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/profileinfo', function () {
        return view('profile._profileinfo');
    })->name('profileinfo');
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');

    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/bookingrequests', function () {
        return view('profile._bookingrequests');
    })->name('bookingrequests');

    Route::get('/purchasehistory', function() {
        return view('profile._purchasehistory');
    })->name('purchasehistory');
});

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/service', [ServiceController::class, 'showServices'])->name('service');
// Route::get('/product', [ProductController::class, 'showProducts'])->name('product');

// // Route::get('/service', function () {
// //     return view('service');
// // })->name('service');

// // Route::get('/product', function () {
// //     return view('product');
// // })->name('product');

// Route::get('/register', function () {
//     return view('Register');
// })->name('register');

// Route::get('/gallery', function () {
//     return view('gallery');
// })->name('gallery');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/profileinfo', function () {
//     return view('profile._profileinfo');
// })->name('profileinfo');

// Route::get('/bookingrequests', function () {
//     return view('profile._bookingrequests');
// })->name('bookingrequests');

// // Route::get('/purchasehistory', function() {
// //     return view('profile._purchasehistory');
// // })->name('purchasehistory');

// Route::get('/purchasehistory', function(){
//     return view('profile._purchasehistory');
// })->name('purchasehistory');

// Route::get('login', function () {
//     return view('Login');
// });

// Route::get('/book', function () {
//     return view('book');
// })->name('book');
