<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PrendasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscripcionesController;


Route::view('/', "inicio")->name('inicio');
Route::view('/carrito', "carrito")->name('carrito');




//rutas login
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/userhome', [App\Http\Controllers\HomeController::class, 'index'])->name('userhome')->middleware('auth');

Route::view('/administrador', 'admin.administrador')->name('administrador'); //en caso que este en una carpeta usar el punto .


Route::view('/prendas','admin.menu.Articulos')->name('prendas');
Route::get('/prendas', [PrendasController::class, 'index'])->name('prendas.index');



Route::view('/categoria','admin.menu.categoria')->name('categorias');
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categorias.index');


Route::view('/clientes','admin.menu.clientes')->name('clientes');
Route::view('/ingresos','admin.menu.ingresos')->name('ingresos');
Route::view('/proveedores','admin.menu.proveedores')->name('proveedores');

///subs
Route::view('/subs','admin.menu.subs')->name('subs');
Route::post('/subs', [SubscripcionesController::class, 'store'])->name('subs.store');
Route::get('/subs', [SubscripcionesController::class, 'index'])->name('subs.index');

Route::view('/ventas','admin.menu.ventas')->name('ventas');
