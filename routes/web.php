<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [ContractController::class, 'dashboard'])->name('dashboard');
Route::get('/contracts/search', [ContractController::class, 'search'])->name('contracts.search');
Route::get('/generate-pdf', [ContractController::class, 'generatePdf'])->name('generate.pdf');
Route::resource('contracts', ContractController::class);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
