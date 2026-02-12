<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LibroYCositaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Rutas públicas para el CRUD de libros_y_cositas.
|
*/

Route::apiResource('libros-y-cositas', LibroYCositaController::class);
