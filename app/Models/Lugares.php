<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
    use HasFactory;
    protected $table = 'lugares'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'ubicacion',
        'clima',
        'idioma',
        'moneda',
        'costumbres',
        'horario_salida',
        'imagen',
    ];
}
