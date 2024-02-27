<?php

use App\Http\Controllers\ApiClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/', [ApiController::class, 'list']);
Route::post('/', [ApiController::class, 'store']);
Route::put('/update/{id}', [ApiController::class, 'update']);
Route::get('/delete/{id}', [ApiController::class, 'delete'])->name('excluiEmpresa');
Route::get('/show/{id}', [ApiController::class, 'show']);


Route::get('/client', [ApiClienteController::class, 'list']);
Route::post('/client', [ApiClienteController::class, 'store']);
Route::put('/update/client/{id}', [ApiClienteController::class, 'update']);
Route::get('/client/show/{id}', [ApiClienteController::class, 'show']);
Route::delete('/client/delete/{id}', [ApiClienteController::class, 'delete']);
