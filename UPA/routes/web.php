<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PaidToeicController;


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
Route::get('/reset', action: [ResetPasswordController::class, 'index'])->name('reset');


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/free-toeic/register', function () {
    return view('FreeRegister');
})->name('free-toeic.form');

Route::post('/free-toeic/register', [App\Http\Controllers\FreeToeicController::class, 'register'])
    ->name('free-toeic.register');


    Route::get('/paid-toeic/register', [PaidToeicController::class, 'create'])->name('paid-toeic.form');
Route::post('/paid-toeic/register', [PaidToeicController::class, 'store'])->name('paid-toeic.register');

