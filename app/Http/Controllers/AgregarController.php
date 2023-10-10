<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $servicioData = [
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
            'clima' => $request->clima,
            'costumbres' => $request->costumbres,
            'horario' => $request->horario,
            'imagen' => $request->imagen,
            'costo' => $request->costo,
            'descuento' => $request->descuento
        ];

        $url = env("URL_SERVER_API", 'http://127.0.0.1');
        $response = Http::post($url . '/Servicios', $servicioData);

        if ($response->successful()) {
            return redirect()->route('servicios.index')->with('mensaje', 'Servicio creado con éxito');
        } else {
            return back()->with(['message' => 'Error al agregar el lugar']);
        }
    }
}
