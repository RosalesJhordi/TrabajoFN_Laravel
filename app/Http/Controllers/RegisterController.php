<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.Register');
    }

    public function store(Request $request){

        //validacion 
        $this->validate($request,[
            'name' => 'required',
            'apellidos' => 'required|min:5|max:30',
            'telefono' => 'required|',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6'
        ]);
        
        //crear registro
        User::create([
            'name' => $request ->name,
            'apellidos' => $request ->apellidos,
            'telefono' => $request->telefono,
            'email' => $request ->email,
            'password' => Hash::make($request ->password)
        ]);

        //autenticar
        //1
        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password
      ]);
      return redirect()->route('post.index', auth()->user()->name);
        
    }
}
