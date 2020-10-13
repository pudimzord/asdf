<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('novocliente', [App\Http\Controllers\ClientesController::class, 'index']);
Route::post('novocliente', [App\Http\Controllers\ClientesController::class, 'criar']);
Route::get('cliente/{id}', [App\Http\Controllers\ClientesController::class, 'ver'])->name('verCliente');
Route::get('cliente/{id}/editarcliente', [App\Http\Controllers\ClientesController::class, 'editar']);
Route::patch('cliente/{id}', [App\Http\Controllers\ClientesController::class, 'atualizar']);
Route::delete('cliente/{id}', [App\Http\Controllers\ClientesController::class, 'atualizar']);

Route::get('cliente/{id}/novoequipamento', [App\Http\Controllers\EquipamentoController::class, 'index']);
Route::post('cliente/{id}/novoequipamento', [App\Http\Controllers\EquipamentoController::class, 'criar']);

