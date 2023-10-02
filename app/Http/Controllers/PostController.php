<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lugares;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(User $user){
        // dd(auth()->user());
        $destinos = Lugares::all();
        $user = auth()->user(); // Obtener el usuario autenticado

        return view('Usuario', [
            'user' => $user,
            'destinos' => $destinos
        ]);
    }
}
