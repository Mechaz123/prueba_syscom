<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UsuariosController::class, 'listarUsuarios']);
Route::get('/ingresar_usuario', [UsuariosController::class, 'ingresarUsuario']);
Route::get('/editar_usuario/{id}', [UsuariosController::class, 'editarUsuario']);
Route::post('/crear_usuario', [UsuariosController::class, 'crearUsuario']);
Route::put('/editar/{id}', [UsuariosController::class, 'editar']);
Route::delete('/eliminar_usuario/{id}', [UsuariosController::class, 'eliminarUsuario']);
