<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PaidToeicController;
use App\Http\Controllers\FreeToeicController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
Route::get('/reset', [ResetPasswordController::class, 'index'])->name('reset');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/profile', fn () => view('profile'));

Route::get('/free-toeic/register', fn () => view('FreeRegister'))->name('free-toeic.form');
Route::post('/free-toeic/register', [FreeToeicController::class, 'register'])->name('free-toeic.register');

Route::get('/paid-toeic/register', [PaidToeicController::class, 'create'])->name('paid-toeic.form');
Route::post('/paid-toeic/register', [PaidToeicController::class, 'store'])->name('paid-toeic.register');

Route::get('forgot-password', function () {
    return view('auth.forgot-password'); // Buat file view-nya kalau belum ada
})->middleware('guest')->name('password.request');
