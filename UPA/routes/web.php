<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PaidToeicController;
use App\Http\Controllers\FreeToeicController;
use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\EducationalStaffController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\ToeicScoreController;
// use App\Http\Controllers\EducationalStaffController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('login.post');

Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
Route::get('/reset', [ResetPasswordController::class, 'index'])->name('reset');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/profile', fn() => view('profile'));

Route::get('/free-toeic/register', fn() => view('FreeRegister'))->name('free-toeic.form');
Route::post('/free-toeic/register', [FreeToeicController::class, 'register'])->name('free-toeic.register');

Route::get('/paid-toeic/register', [PaidToeicController::class, 'create'])->name('paid-toeic.form');
Route::post('/paid-toeic/register', [PaidToeicController::class, 'store'])->name('paid-toeic.register');

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password'); // Buat file view-nya kalau belum ada
// })->middleware('guest')->name('password.request');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password'); // Pastikan file ini ada di resources/views/auth/
})->name('password.request');


Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
    ->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

// Menangani submit form reset password
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


// web.php
// Route::resource('/announcements', AnnouncementController::class);
// // Route::resource('announcements', AnnouncementController::class);
// Route::get('/fetch-announcements', [AnnouncementController::class, 'fetch'])->name('announcements.fetch');

// List semua pengumuman
Route::get('announcement', [AnnouncementController::class, 'index'])->name('admin.announcement.index');

// Form tambah pengumuman
Route::get('announcement/create', [AnnouncementController::class, 'create'])->name('admin.announcement.create');

// Simpan pengumuman baru
Route::post('announcement', [AnnouncementController::class, 'store'])->name('admin.announcement.store');

// Form edit
Route::get('announcement/{id}/edit', [AnnouncementController::class, 'edit'])->name('admin.announcement.edit');

// Update pengumuman
Route::put('announcement/{id}', [AnnouncementController::class, 'update'])->name('admin.announcement.update');

// Hapus pengumuman
Route::delete('announcement/{id}', [AnnouncementController::class, 'destroy'])->name('admin.announcement.destroy');



// Index (list semua mahasiswa)
Route::get('/admin/student-register', [AdminRegistrationController::class, 'index'])->name('admin.student.register');

// Form tambah mahasiswa
Route::get('/admin/student-register/create', [AdminRegistrationController::class, 'create'])->name('admin.student.register.create');

// Simpan mahasiswa baru
Route::post('/admin/student-register', [AdminRegistrationController::class, 'store'])->name('admin.student.register.store');

Route::get('/toeic-scores', [ToeicScoreController::class, 'index'])->name('toeic.scores.index');

Route::resource('/majors', MajorController::class);

Route::resource('/study-programs', StudyProgramController::class);

    Route::get('/educational-staff', [EducationalStaffController::class, 'index'])->name('educational-staff.index');
    Route::get('/educational-staff/create', [EducationalStaffController::class, 'create'])->name('educational-staff.create');
    Route::post('/educational-staff', [EducationalStaffController::class, 'store'])->name('educational-staff.store');
    Route::get('/educational-staff/{id}', [EducationalStaffController::class, 'show'])->name('educational-staff.show');
    Route::get('/educational-staff/{id}/edit', [EducationalStaffController::class, 'edit'])->name('educational-staff.edit');
    Route::put('/educational-staff/{id}', [EducationalStaffController::class, 'update'])->name('educational-staff.update');
    Route::delete('/educational-staff/{id}', [EducationalStaffController::class, 'destroy'])->name('educational-staff.destroy');
