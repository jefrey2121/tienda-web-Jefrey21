<?php

use Illuminate\Support\Facades\Route;


Route::view('/', "inicio")->name('inicio');
Route::view('/carrito', "carrito")->name('carrito');
Route::view('/userhome', "userhome")->name('userhome');

//ruta del admin
Route::view('/administrador', 'admin.administrador')->name('administrador'); //en caso que este en una carpeta usar el punto .
Route::view('/articulos','admin.menu.articulos')->name('articulos');
Route::view('/categoria','admin.menu.categoria')->name('categoria');
Route::view('/clientes','admin.menu.clientes')->name('clientes');
Route::view('/ingresos','admin.menu.ingresos')->name('ingresos');
Route::view('/proveedores','admin.menu.proveedores')->name('proveedores');
Route::view('/subs','admin.menu.subs')->name('subs');
Route::view('/ventas','admin.menu.ventas')->name('ventas');

//rutas login
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/userhome', [App\Http\Controllers\HomeController::class, 'index'])->name('userhome')->middleware('auth');

