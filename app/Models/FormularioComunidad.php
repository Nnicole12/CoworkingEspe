<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioComunidad extends Model
{
    protected $table = 'formulario_comunidad';

    protected $fillable = [
        'nombre',
        'apellido',
        'identificador',
        'correo',
        'carrera',
        'nivel',
        'numPersonas',
        'hora_inicio',
        'hora_final',
        'dia_inicial',
        'dia_final',
        'proyector',
        'pizarra_inteligente',
    ];
}