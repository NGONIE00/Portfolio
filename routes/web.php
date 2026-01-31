<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Health check for Render
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toIso8601String(),
    ], 200);
})->name('health');

// Portfolio routes

// Admin Login Routes (NO AUTH NEEDED)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');
});

// Admin Protected Routes (NEEDS PASSWORD)
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    Route::get('/messages/{id}', [AdminController::class, 'viewMessage'])->name('message.view');
    Route::delete('/messages/{id}', [AdminController::class, 'deleteMessage'])->name('message.delete');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('index');
    Route::get('/about', [PortfolioController::class, 'about'])->name('about');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
    Route::post('/contact', [PortfolioController::class, 'sendMessage'])
        ->middleware(['throttle:5,1'])
        ->name('contact.send');
    Route::get('/download-cv', [PortfolioController::class, 'downloadCV'])->name('download-cv');
});