<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('/register')->group(function () {
    Route::post('/email', [UserController::class, 'processEmail']);
    Route::post('/verify-otp', [UserController::class, 'verifyOTP']);
    Route::post('/resend-otp', [UserController::class, 'resendOTP']);
    Route::post('/info', [UserController::class, 'processInfo']);
});
