<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subastas;

class SubastasController extends Controller
{
    public function registro(Request $request)
    {
        $nombre      = $request->input('nombre');
        $fecha       = $request->input('fecha');
        $lote_id       = $request->input('lote_id');

        Subastas::create([
            'nombre' => $nombre,
            'fecha'  => $fecha,
            'lote_id'  => $lote_id,
        ]);

        return redirect()->route('subastas.mostrar');
    }

    public function registro_vista()
    {
        return view('Subastas/registro');
    }

    public function mostrar()
    {
        $subastas = Subastas::all();

        return view('Subastas/mostrar', [
            'subastas' => $subastas
        ]);
    }

    public function actualizar_vista($id)
    {
        $subastas = Subastas::where('id', '=', $id)->first();
        
        return view('Subastas/actualizar', [
            'subastas' => $subastas[0]
        ]);
    }

    public function actualizar($id)
    {
        $nombre      = $request->input('nombre');
        $fecha       = $request->input('fecha');
        $lote_id       = $request->input('lote_id');

        $subastas = Subastas::where('id', '=', $id)->first();
        
        $subastas = $subastas[0];

        $subastas->nombre = $nombre;
        $subastas->fecha = $fecha;
        $subastas->lote_id = $lote_id;
        $subastas->save();


        return redirect()->route('subastas.mostrar');
    
    }
}
