<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
// Um usuário, inicialmente, tem um endereço.
Route::get('/users', [UserController::class, 'index']);

//Buscar por um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Incluir um novo usuário
Route::post('/users', [UserController::class, 'insert']);

// Um endereço, inicialmente, tem um usuário.
Route::get('/addresses', [AddressController::class,'index']);

//Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Incluir um novo endereço
Route::post('/addresses', [AddressController::class, 'insert']);

// Incluir um novo endereço
// Route::post('/addresses', [AddressController::class, 'insert']);


// Incluir um novo invoice
Route::post('/invoices', [InvoiceController::class, 'insert']);

// Listar invoices
Route::get('/invoices', [InvoiceController::class, 'index']);


