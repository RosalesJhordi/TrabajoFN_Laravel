<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //
    public function store(Request $request){
        $imagen = $request->file('file');

    $nomImage = Str::uuid() . "." . $imagen->extension();
    $imgServe = Image::make($imagen);
    $imgServe->fit(2000,2000);

    $imgPath = public_path('Uploads') . '/' . $nomImage;
    $imgServe->save($imgPath);

    return response()->json(['imagen'=>$nomImage]);
    }
}
