<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.Login');
    }

    //validar usuario
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required | email',
            'password' => 'required'
        ]);
        $email = "Admin@gmail.com";
        $pass = "201104";
        $name = "Jhordi";
        
        if ($request->email == $email && $request->password == $pass) {
            return redirect()->route('post.index', auth()->user()->$name);
        } else {
            if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
                
            return back()->with('mensaje','Credenciales Incorrectas');
            } 
            return redirect()->route('post.index', auth()->user()->name);
        }
    }
}
