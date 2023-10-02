<?php

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

Route::get('/{user:name}',[PostController::class,'index'])->name('post.index');

//ruta admin 
Route::get('/admin',[AdminController::class,'index'])->name('admin');
//opciones admin

//iamgenes 
Route::post('/image',function(Request $request){
    
    $imagen = $request->file('file');

    $nomImage = Str::uuid() . "." . $imagen->extension();
    $imgServe = Image::make($imagen);
    $imgServe->fit(1000,1000);

    $imgPath = public_path('Uploads') . '/' . $nomImage;
    $imgServe->save($imgPath);

    return response()->json(['imagen'=>$nomImage]);

})->name('image.store');

Route::post('/imgs',[PostController::class,'store'])->name('imgs.store');