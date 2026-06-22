<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NotaController;


Route::view('/', 'welcome')->name('home');


Route::middleware(['auth', 'verified'])->group(function () {


    Route::view('dashboard', 'dashboard')
        ->name('dashboard');


    // KATEGORI
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('category');

    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');

    Route::post('/categories', [CategoryController::class, 'store'])
        ->name('categories.store');

    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])
        ->name('categories.edit');

    Route::put('/categories/{id}', [CategoryController::class, 'update'])
        ->name('categories.update');

    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])
        ->name('categories.destroy');



    // TRANSAKSI
Route::get('/transactions', [TransactionController::class, 'index'])
    ->name('transactions');

Route::post('/transactions', [TransactionController::class, 'store'])
    ->name('transactions.store');

Route::delete('/transactions/{id}', [TransactionController::class, 'destroy'])
    ->name('transactions.destroy');

    // NOTA PDF
    Route::get('/transactions/{id}/nota',
[NotaController::class, 'show'])
->name('nota.show');


Route::get('/transactions/{id}/nota/pdf',
[NotaController::class, 'cetak'])
->name('nota.cetak');


    // CUSTOMER
    Route::get('/customers', [CustomerController::class, 'index'])
        ->name('customers');

    Route::get('/customers/create', [CustomerController::class, 'create'])
        ->name('customers.create');

    Route::post('/customers', [CustomerController::class, 'store'])
        ->name('customers.store');

    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])
        ->name('customers.edit');

    Route::put('/customers/{id}', [CustomerController::class, 'update'])
        ->name('customers.update');

    Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])
        ->name('customers.destroy');


});


require __DIR__.'/settings.php';