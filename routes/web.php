<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;

Route::get('/', [DetailsController::class, 'index'])->name('index');
Route::Post('/', [DetailsController::class, 'create'])->name('index');
Route::get('edit/{id}', [DetailsController::class, 'edit'])->name('edit');
Route::PUT('edit/{id}', [DetailsController::class, 'update'])->name('edit');
Route::get('/delete/{id}', [DetailsController::class, 'destroy'])->name('delete');
