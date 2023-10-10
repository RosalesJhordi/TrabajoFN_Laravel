<?php

use App\Models\User;
use App\Models\Lugares;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\OpcionesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservarController;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoEmail;


use Illuminate\Support\Facades\Http;

//eliminar
Route::get('/delete/{id}',[AgregarController::class,'delete'])->name('eliminar');

//subir img a servidor
Route::post('/image',function(Request $request){
    
     $imagen = $request->file('file');

     $nomImage = Str::uuid() . "." . $imagen->extension();
     $imgServe = Image::make($imagen);
     $imgServe->fit(2000,2000);

    $imgPath = public_path('Uploads') . '/' . $nomImage;
    $imgServe->save($imgPath);

    return response()->json(['imagen'=>$nomImage]);

})->name('image.store');

//agregar lugares
Route::get('/agregar-lugar',[AgregarController::class,'index'])->name('agregar.index');
Route::post('/agregar-lugar',[AgregarController::class,'store'])->name('agregar.store');
//Registro

Route::get('/registro',[RegisterController::class,'index'])->name('register');
Route::post('/registro',[RegisterController::class,'store'])->name('register.store');

//Login

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login.store');

//Ruta reservaciones

Route::get('/reservas', function () { 

    $destinos = Lugares::all();
    $user = auth()->user();
    return view('navs.Reservas', ['destinos' => $destinos, 'user' => $user]);

})->name('reservas');

Route::post('/{nombre}',[ReservarController::class,'store'])->name('reservar');

//Routes administrador

    //redirecionar
Route::get('/admin',[AdminController::class,'index'])->name('admin');

    

    

    
//Inicio

Route::get('/',function(){

    $url = env("URL_SERVER_API",'http://127.0.0.1');
    $response = Http::get($url. '/Servicios');
    $destinos = $response->json();
    return view('Inicio',compact('destinos')); 
});
Route::get('/inicio',function(){ $destinos = Lugares::all(); $user = auth()->user(); return view('navs.Inicio',['destinos' => $destinos, 'user' => $user]); })->name('inicio');




//logout
Route::get('logout',[LogoutController::class,'index'])->name('logout');

//Restablecer

Route::get('/restablecer',function(){ return view('auth.Restablecer'); })->name('restablecer');

//Redirecionar si el usuario esta verificado o aya creado cuenta

Route::get('/Bienvenido',[PostController::class,'index'])->name('post.index');
