<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])->name('category');

    Route::get('/transactions', [TransactionController::class, 'index'])
        ->name('transactions');

    Route::view('/customers', 'customers.index')
    ->name('customers');    
});

require __DIR__.'/settings.php';