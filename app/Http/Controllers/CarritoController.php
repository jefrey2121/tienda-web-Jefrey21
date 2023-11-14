<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregarAlCarrito(Request $request)
    {
        // Lógica para agregar al carrito
        // Puedes almacenar los elementos en la sesión por simplicidad
        $producto = $request->input('producto');
        $cantidad = $request->input('cantidad');

        // Aquí podrías almacenar los elementos en la sesión o en una base de datos
        // ...

        // Redirige de vuelta a la página desde la que se hizo la solicitud
        return redirect()->back()->with('mensaje', 'Producto agregado al carrito.');
    }
}
