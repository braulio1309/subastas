<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Images;

class ProductosController extends Controller
{
    public function registro(Request $request)
    {
        $nombre      = $request->input('nombre');
        $descripcion = $request->input('descripcion');

        foreach($request->image AS $image) 
        {
            $i++;
            if($image)
            {
                $name_image = time().$image->getClientOriginalName();

                storage::disk('public')->put($name_image, File::get($image));
                
                images::create([
                    'producto_id'   => Auth::user()->id,
                    'nombre'        => $name_image,
                ]);  
            }
        }

        Productos::create([
            'nombre' => $nombre,
            'descripcion' => $descripcion
        ]);

        return redirect()->route('productos.mostrar');
    }

    public function registro_vista()
    {
        return view('Productos/registro');
    }

    public function mostrar()
    {
        $productos = Productos::all();

        return view('Productos/mostrar', [
            'productos' => $productos
        ]);
    }

    public function actualizar_vista($id)
    {
        $producto = Productos::where('id', '=', $id)->first();
        
        return view('Productos/actualizar', [
            'producto' => $producto[0]
        ]);
    }

    public function actualizar($id)
    {
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');

        $producto = Productos::where('id', '=', $id)->first();
        
        $producto = $producto[0];

        $producto->nombre = $nombre;
        $producto->descripcion = $descripcion;
        $productos->save();

        return redirect()->route('productos.mostrar');
    
    }
}
