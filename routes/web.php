<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\IngoingController;
use App\Http\Controllers\OutgoingController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('role:admin');

Route::get('login', [LoginController::class, 'checkLogin'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/user/profile/{id}', [UserController::class, 'profile'])->name('user.profile');

Route::get('overview', [OverviewController::class, 'index'])->name('overview');

Route::get('registration', [LoginController::class, 'registration'])->name('register');
Route::post('registration', [LoginController::class, 'postRegistration'])->name('register.post');

Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'postForgotPassword'])->name('forgot-password.post');

Route::put('/account/change-password', [PasswordController::class, 'update'])->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::get('/account/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('category', [CategoryController::class, 'index'])->name('category');

    Route::prefix('visitors')->group(function() {
        Route::get('/', [VisitorController::class, 'index'])->name('visitors.index');
        Route::get('/all', [VisitorController::class, 'all'])->name('visitors.all');
        Route::get('/create', [VisitorController::class, 'create'])->name('visitors.create');
        Route::post('/', [VisitorController::class, 'store'])->name('visitors.store');
        Route::get('/{id}', [VisitorController::class, 'show'])->name('visitors.show');
        Route::get('/{id}/edit', [VisitorController::class, 'edit'])->name('visitors.edit');
        Route::put('/{id}', [VisitorController::class, 'update'])->name('visitors.update');
        Route::delete('/{id}', [VisitorController::class, 'destroy'])->name('visitors.destroy');
    
        Route::resource('visitors', VisitorController::class)->middleware('role:admin');
    });

    Route::prefix('ingoings')->group(function() {
        Route::get('/', [IngoingController::class, 'index'])->name('ingoings.index');
        Route::get('/create', [IngoingController::class, 'create'])->name('ingoings.create');
        Route::post('/', [IngoingController::class, 'store'])->name('ingoings.store');
        Route::get('/{id}', [IngoingController::class, 'show'])->name('ingoings.show');
        Route::get('/{id}/edit', [IngoingController::class, 'edit'])->name('ingoings.edit');
        Route::put('/{id}', [IngoingController::class, 'update'])->name('ingoings.update');
        Route::delete('/{id}', [IngoingController::class, 'destroy'])->name('ingoings.destroy');

        // Route::resource('ingoings', IngoingController::class);
    });

    Route::prefix('outgoings')->group(function() {
        Route::get('/', [OutgoingController::class, 'index'])->name('outgoings.index');
        Route::get('/create', [OutgoingController::class, 'create'])->name('outgoings.create');
        Route::post('/', [OutgoingController::class, 'store'])->name('outgoings.store');
        Route::get('/{id}', [OutgoingController::class, 'show'])->name('outgoings.show');
        Route::get('/{id}/edit', [OutgoingController::class, 'edit'])->name('outgoings.edit');
        Route::put('/{id}', [OutgoingController::class, 'update'])->name('outgoings.update');
        Route::delete('/{id}', [OutgoingController::class, 'destroy'])->name('outgoings.destroy');

        // Route::resource('outgoings', OutgoingController::class);
    });
});

require __DIR__.'/auth.php';