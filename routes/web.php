<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('OK', 200);
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Grouped portfolio routes with prefix and name alias
Route::prefix('/')->name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('index');
    Route::get('about', [PortfolioController::class, 'about'])->name('about');
    Route::get('projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('contact', [PortfolioController::class, 'contact'])->name('contact');
    Route::post('contact', [PortfolioController::class, 'sendMessage'])
        ->middleware(['throttle:5,1']) // Allow 5 requests per minute per IP
        ->name('contact.send');
    Route::get('/download-cv', [PortfolioController::class, 'downloadCV'])->name('download-cv');
});
