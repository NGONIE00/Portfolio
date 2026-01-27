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