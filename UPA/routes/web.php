<?php


use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/dashboard', action: [DashboardController::class,'index']);
// Route::get('/about', action: [AboutController::class,'index']);
// routes/web.php
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/faq', action: [FaqController::class, 'index'])->name('faq');

Route::get('/login', action: [LoginController::class, 'index'])->name('login');
Route::get('/signup', action: [SignupController::class, 'index'])->name('signup');


