<?php

use App\Http\Controllers\ClienteProductoController;
use App\Http\Controllers\RoleUserController;
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


Route::get('usuario/asociar_rol',[ClienteProductoController::class,'asociar']);
Route::post('usuario/asociar_rol/store', [ClienteProductoController::class,'store'])->name('cliente_producto.store');

