<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/listaempresas', [HomeController::class, 'listaEmpresas']);
