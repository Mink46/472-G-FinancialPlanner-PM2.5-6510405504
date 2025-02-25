<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Add these new auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::view('/transaction', 'html.transaction');
Route::view('/bookmark', 'html.bookmark');

// Transaction routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/transaction', function() {
        return view('html.transaction');
    });
    Route::post('/transactions', [TransactionController::class, 'store']);
    Route::get('/transactions/categories', [TransactionController::class, 'getCategories']);
    Route::get('/api/transactions/chart-data/{timeFrame}', [DashboardController::class, 'getChartData']);
});
