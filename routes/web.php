<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [ContractController::class, 'dashboard'])->name('dashboard');
Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
Route::get('/contracts/create', [ContractController::class, 'create'])->name('contracts.create');
Route::post('/contracts', [ContractController::class, 'store'])->name('contracts.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/contracts/{id}/pdf', [ContractController::class, 'downloadPDF'])->name('contracts.pdf');
