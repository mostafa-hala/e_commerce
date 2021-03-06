<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\productController;

use App\Http\Controllers\ADMIN\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ADMIN\GitHubController;


use App\Http\Controllers\ADMIN\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ADMIN\ProductController as ADMINProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [productController::class ,'showhomeUser'])->name('showhomeUser');

Auth::routes();
 Route::get('/home', [HomeController::class, 'index'])->name('home');

 
 Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('addToCart');
 Route::delete('/carts/{cart}/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

 route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
//  Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



