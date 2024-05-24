<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('pedidos', App\Http\Controllers\PedidoController::class);
Route::resource('camionero', App\Http\Controllers\CamioneroController::class);
Route::resource('producto', App\Http\Controllers\ProductoController::class);



