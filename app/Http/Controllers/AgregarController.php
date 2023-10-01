<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarController extends Controller
{
    public function index(){
        return view('opciones.Agregar');
    }
}
