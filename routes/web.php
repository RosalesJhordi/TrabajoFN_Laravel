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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/restablecer',function(){
    return view('auth.Restablecer');
})->name('restablecer');

Route::post('/restablecer',function (Request $request){

    $email = $request->input('email');
    $codigo = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

    Mail::to('yhordiyhom65@gmail.com')->send(new CodigoEmail($codigo));

})->name('restablecer');

Route::post('/{nombre}',[ReservarController::class,'store'])->name('reservar');

Route::get('/inicio', function () {
    $destinos = Lugares::all();
    $user = auth()->user();
    return view('navs.Inicio', ['destinos' => $destinos, 'user' => $user]);
})->name('inicio');

Route::get('/reservas', function () {
    $destinos = Lugares::all();
    $user = auth()->user();
    return view('navs.Reservas', ['destinos' => $destinos, 'user' => $user]);
})->name('reservas');

Route::post('/delete',function(Request $request){
    $id = $request->input('id');
    Lugares::destroy($id);
    return back()->with('success', 'Lugar eliminado correctamente');
})->name('eliminar');

Route::get('/Boletos',function(){
    return view('Boletos');
})->name('boletos');


Route::get('/asientos',function(){
    return view('Asientos.Asientos');
})->name('asientos');

Route::get('/agregar',[AgregarController::class,'index'])->name('agregar');
Route::post('/agregar',[AgregarController::class,'store']);

Route::get('/', function () 
{ 
    $destinos = Lugares::all();

    return view('Inicio',compact('destinos')); 
});

//logout
Route::get('logout',[LogoutController::class,'index'])->name('logout');

Route::get('admin', function(){ return view('Admin'); })->name('admin');

//routes Registro

Route::get('/registro',[RegisterController::class,'index'])->name('registro');
Route::post('/registro',[RegisterController::class,'store']);

//routes login
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);

//redirecionar-
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/{user:name}',[PostController::class,'index'])->name('post.index');
});

//ruta admin 
Route::get('/admin',[AdminController::class,'index'])->name('admin');
//opciones admin
//iamgenes 
Route::post('/image',function(Request $request){
    
    $imagen = $request->file('file');

    $nomImage = Str::uuid() . "." . $imagen->extension();
    $imgServe = Image::make($imagen);
    $imgServe->fit(2000,2000);

    $imgPath = public_path('Uploads') . '/' . $nomImage;
    $imgServe->save($imgPath);

    return response()->json(['imagen'=>$nomImage]);

})->name('image.store');

Route::post('/imgs',[PostController::class,'store'])->name('imgs.store');