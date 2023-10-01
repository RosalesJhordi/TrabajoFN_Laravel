<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $destinos = Lugares::all();
        return view('AdminPanel', compact('destinos'));
    }
}
