<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoEmail;

class RestablecerController extends Controller
{
    public function index(){
        return view('auth.Restablecer');
    }
    public function store(Request $request){

        $email = $request->input('email');
        $codigo = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        Mail::to($email)->send(new CodigoEmail($codigo));

    }
}
