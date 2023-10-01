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
            'horario' => 'required'
        ]);

        Lugares::create([
            'nombre' => $request -> nombre,
            'ubicacion' => $request -> ubicacion,
            'clima' => $request -> clima,
            'costumbres' => $request -> costumbres,
            'horario_salida' => $request -> horario,
        ]);

        return back()->with('mensaje','Lugar Añadido con exito');
    }
}
