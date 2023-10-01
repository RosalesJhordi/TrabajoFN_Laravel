<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OpcionesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::post('/imagenes',[ImagenController::class,'store'])->name('imagen.store');

Route::get('/agregar',[AgregarController::class,'index'])->name('agregar');
Route::post('/agregar',[AgregarController::class,'store']);

Route::get('/', function () { return view('Inicio'); });

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