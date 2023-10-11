<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BoletosController extends Controller
{
    public function index(Request $request){
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::get($url. '/Servicios');
        $destinos = $response->json();
        $user = $request->input('user');
        return view('navs.Boletos', ['destinos' => $destinos, 'user' => $user]);
    }

    public function store(Request $request){
        $user = $request->input('user');
        $lugar = $request->input('lugar');
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::post($url. '/Boletos', [
            'json' => ['user' => $user, 'lugar' => $lugar]
        ]);
        $responseBody = $response->getBody()->getContents();

        dd($responseBody);
    }
}
