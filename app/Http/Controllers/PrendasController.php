<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Marca;
use App\Models\Prendas;
use App\Models\Proveedor;
use App\Models\Talla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marca = Marca::all(); 
        $tallas = Talla::all();
        $proveedores = Proveedor::all();
        $categorias = Categorias::all();
        $prendas = Prendas::with('marca', 'talla', 'proveedor','categoria')->get();
        return view('admin.menu.prendas', compact('marca', 'tallas', 'prendas','proveedores','categorias'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validar la solicitud
       $request->validate([
        'id_marca' => 'required',
        'id_talla' => 'required',
        'id_categoria' => 'required',
        'id_proveedor' => 'required',
        'precio' => 'required',
        'existencias' => 'required',
        'descripcion' => 'required',
        'material' => 'required',
        'estado' => 'required',
    ]);
    $prenda = new Prendas($request->input());

    if ($request->hasFile('imagen')) {
        $imagenUrl = $request->file('imagen')->store('public/img_prendas');
        $prenda->imagen_url = $imagenUrl;
    }

    $prenda->saveOrFail();

    return redirect()->route('prendas.index')->with('success', 'Prenda creada exitosamente');
    }
    public function show(Prendas $prendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prendas $prendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prendas $prendas)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prendas=Prendas::find($id);

        if ($prendas->imagen_url) {
            Storage::delete($prendas->imagen_url);
        }
        $prendas->delete();
        

        return redirect()->route('prendas.index');
    }
       
}
