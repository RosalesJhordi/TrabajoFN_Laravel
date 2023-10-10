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

        $url = env("URL_SERVER_API",'http://127.0.0.1');

        $response = Http::post($url . '/Servicios',[
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
