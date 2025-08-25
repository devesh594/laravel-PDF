<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'pages.index')->name('pages.index');


Route::get('/customers/create', [CustomerController::class, 'create'])->name('pages.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('pages.store');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('pages.show');
Route::get('/customers/{customer}/pdf', [CustomerController::class, 'downloadPdf'])->name('pages.pdf');
// Route::get('/customers', [CustomerController::class, 'index'])->name('pages.index');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('pages.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('pages.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('pages.destroy');


