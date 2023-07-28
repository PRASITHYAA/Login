<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'Registration');
Route::Post('store', [StoreController::class, 'store']);

Route::view('/login', 'Login');
Route::Post('authenticate', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout']);

Route::view('/home', 'Home')->middleware('auth')->name('home');
// Route::view('/index', 'index')->middleware('auth')->name('index');

// Route::get('/reset.html', 'reset');
// Route ::post('forgetpassword',[FormPasswordController:: class, Shoe])

Route::get('forgetpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forgetpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('forgetpassword', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('forgetpassword', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
