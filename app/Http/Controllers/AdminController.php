<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index(){
        $url = env("URL_SERVER_API",'http://127.0.0.1');
        $response = Http::get($url. '/Servicios');
        $destinos = $response->json();
        return view('AdminPanel', compact('destinos'));
    }
}
