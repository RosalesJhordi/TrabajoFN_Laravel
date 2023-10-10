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

        $response = Http::post($url . '/Registro',[
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation
        ]);

        $user = $response->json();
        return redirect()->route('post.index',compact('user'));

    }
}
