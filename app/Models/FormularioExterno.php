<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioExterno extends Model
{
    protected $table = 'formulario_externos';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'correo',
        'numPersonas',
        'hora_inicio',
        'hora_final',
        'dia_inicial',
        'dia_final',
        'proyector',
        'pizarra_inteligente',
    ];
}