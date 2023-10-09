<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.Register');
    }

    public function store(Request $request){
    $url = env("URL_SERVER_API",'http://127.0.0.1');
    //validacion 
    $this->validate($request,[
        'name' => 'required',
        'apellidos' => 'required|min:5|max:30',
        'telefono' => 'required',
        'email' => 'required|unique:users|email',
        'password' => 'required|confirmed|min:6'
    ]);
        
    //crear registro
    $response = Http::post($url.'/Clientes',[
        'name' => $request->name,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    //autenticar
    //1
        
    }
}
