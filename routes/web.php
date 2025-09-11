<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Portfolio routes
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::post('/contact', [PortfolioController::class, 'sendMessage'])->name('portfolio.contact.send');
