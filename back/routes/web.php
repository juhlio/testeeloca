<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/listaempresas', [HomeController::class, 'listaEmpresas'])->name('listaEmpresas');
Route::get('/novaempresa', [HomeController::class, 'novaEmpresa'])->name('novaEmpresa');
Route::post('/novaempresa', [HomeController::class, 'gravaEmpresa']);
Route::get('/empresa/{id}', [HomeController::class, 'detalheEmpresa'])->name('detalheEmpresa');
Route::get('/empresa/altera/{id}', [HomeController::class, 'alteraEmpresa'])->name('alteraEmpresa');
Route::post('/empresa/altera/{id}', [HomeController::class, 'gravaAlteracaoEmpresa']);


Route::get('/listaclientes', [HomeController::class, 'listaClientes'])->name('listaClientes');
Route::get('/novocliente', [HomeController::class, 'novoCliente'])->name('novoCliente');
Route::post('/novocliente', [HomeController::class, 'gravaCliente']);

Route::get('/cliente/{id}', [HomeController::class, 'detalheCliente'])->name('detalheCliente');
Route::get('/cliente/altera/{id}', [HomeController::class, 'alteraCliente'])->name('alteraCliente');
Route::post('/cliente/altera/{id}', [HomeController::class, 'gravaAlteracaoCliente']);
Route::get('/excluicliente/{id}', [HomeController::class, 'excluiCliente'])->name('excluiCliente');



