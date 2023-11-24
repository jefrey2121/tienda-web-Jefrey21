<?php

namespace App\Http\Controllers;

use App\Models\subscripciones;
use Illuminate\Http\Request;

class SubscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscripciones = subscripciones::all();
        return view('admin.menu.subs', compact('subscripciones'));
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
        $request->validate([
            'correo' => 'required|email|unique:subscripciones,correo',
        ]);
    
        subscripciones::create([
            'correo' => $request->correo,
        ]);
    
        return redirect()->route('inicio')->with('success', 'Te has suscrito correctamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(subscripciones $subscripciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subscripciones $subscripciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subscripciones $subscripciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subscripciones $subscripciones)
    {
        //
    }
}
