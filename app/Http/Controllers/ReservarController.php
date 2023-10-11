<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReservarController extends Controller
{
    public function index(Request $request){
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::get($url. '/Servicios');
        $destinos = $response->json();
        $user = $request->input('data');
        return view('navs.Reservas', ['destinos' => $destinos, 'user' => $user]);
    }
    public function store(Request $request){
        $id = $request->input('id');
        
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::get($url. '/Servicios/'.$id);
        $destinos = $response->json();
        $user = $request->input('data');
        return view('informacion', [
             'lugar' => $destinos, 
             'user' => $user
        ]);
    }
}
