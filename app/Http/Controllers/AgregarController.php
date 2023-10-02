<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;

class AgregarController extends Controller
{
    public function index(){
        return view('opciones.Agregar');
    }
    public function store(Request $request){

        $this->validate($request,[
            'nombre' => 'required',
            'ubicacion' => 'required',
            'clima' => 'required',
            'costumbres' => 'required',
            'horario' => 'required',
            'imagen' => 'required',
            'costo' => 'required',
            'descuento' => 'required'
        ]);

        Lugares::create([
            'nombre' => $request -> nombre,
            'ubicacion' => $request -> ubicacion,
            'clima' => $request -> clima,
            'costumbres' => $request -> costumbres,
            'horario' => $request -> horario,
            'imagen' => $request -> imagen,
            'costo' => $request -> costo,
            'descuento' => $request -> descuento
        ]);

        return back()->with('mensaje','Lugar Añadido con exito');
    }
}
