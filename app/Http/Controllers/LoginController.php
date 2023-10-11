<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(){
        return view('auth.Login');
    }

    //validar usuario
    // public function store(Request $request){
    //     $this->validate($request,[
    //         'email' => 'required | email',
    //         'password' => 'required'
    //     ]);

    //     if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
                
    //         return back()->with('mensaje','Credenciales Incorrectas');
    //     } 
    //     return redirect()->route('post.index', auth()->user()->name);
    // }
    public function store(Request $request){

        $url = env("URL_SERVER_API", 'http://127.0.0.1');
    
        $response = Http::post($url . '/Login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        
        if ($response->successful()) {
            $data = $response->json();
            $accessToken = $data['access_token'];

            $userData = $data['user'];
            $response = Http::get($url. '/Servicios');
            $destinos = $response->json();
            return view('navs.Inicio',[
                'user' => $userData,
                'destinos' => $destinos
            ]);
        } else {
            return back()->with(['message' => 'Credenciales incorrectas']);
        }
    }
}
