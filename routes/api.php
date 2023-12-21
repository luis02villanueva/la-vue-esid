<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CursoClienteController;
use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Controlador Categorias 

Route::get('categoria', [CategoriaController::class, 'index']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('/categoria/{id}', [CategoriaController::class, 'show']);
Route::post('/categoria/{id}', [CategoriaController::class, 'edit']);
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);

// Controlador Cursos 
Route::get('cursos', [CursoController::class, 'index']);
Route::post('cursos', [CursoController::class, 'store']);
Route::post('/cursos/{id}', [CursoController::class, 'edit']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::delete('/cursos/{id}', [CursoController::class, 'destroy']);


// Controlador Clientes 
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);

Route::post('clientes', [ClienteController::class, 'store']);
Route::post('/clientes/{id}', [ClienteController::class, 'edit']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
Route::get('detalleclientes', [ClienteController::class, 'obtenerDetalles']);



// Controlador Detalle Cursos-Cliente


Route::get('cursoscliente', [CursoClienteController::class, 'index']);
Route::post('cursoscliente', [CursoClienteController::class, 'store']);
