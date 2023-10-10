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
            'descripcion' => 'required',
            'horario' => 'required',
            'imagen' => 'required',
            'costo' => 'required',
            'descuento' => 'required'
        ]);
        $url = env("URL_SERVER_API", 'http://127.0.0.1');
        $response = Http::post($url . '/ServicioAdd', [
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
            'clima' => $request->clima,
            'descripcion' => $request->descripcion,
            'horario' => $request->horario,
            'imagen' => $request->imagen,
            'costo' => $request->costo,
            'descuento' => $request->descuento
        ]);

        $suc = $response->json();
        dd($suc);
    }

    public function delete($id){
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::delete($url.'/Servicios/'.$id);
        $us = $response->json();
        dd($us);
        // return back()->with('success', 'Lugar eliminado correctamente'); 
    }
}
