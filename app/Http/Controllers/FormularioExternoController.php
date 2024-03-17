<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioExterno;
use App\Mail\EnviarCorreoExterno;
use Illuminate\Support\Facades\Mail;

class FormularioExternoController extends Controller
{
    public function store(Request $request)
    {
        $formulario = new FormularioExterno;
        $formulario->nombre = $request->nombre;
        $formulario->apellido = $request->apellido;
        $formulario->cedula = $request->cedula;
        $formulario->telefono = $request->telefono;
        $formulario->correo = $request->correo;
        $formulario->numPersonas = $request->numPersonas;
        $formulario->hora_inicio = $request->horaInicio;
        $formulario->hora_final = $request->horaFin;
        $formulario->dia_inicial = $request->diaInicio;
        $formulario->dia_final = $request->diaFin;
        $formulario->proyector = $request->has('proyector'); // Asigna true si está marcado, de lo contrario false
        $formulario->pizarra_inteligente = $request->has('pizarraInteligente'); // Asigna true si está marcado, de lo contrario false
        
        //FormularioComunidad::create($request->all());
        // Guardar el objeto en la base de datos
        $formulario->save();
        
        $datosCorreo = [
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'numPersonas' => $request->numPersonas,
            'hora_inicio' => $request->horaInicio,
            'hora_final' => $request->horaFin,
            'dia_inicial' => $request->diaInicio,
            'dia_final' => $request->diaFin,
            'proyector' => $formulario->proyector,
            'pizarra_inteligente' => $formulario->pizarra_inteligente,
        ];

        // Envía el correo con los datos
        Mail::to($request->correo)->send(new EnviarCorreoExterno($datosCorreo));
        // Redireccionar o devolver una respuesta adecuada
        return redirect('/Reservas')->with('success', 'Formulario enviado correctamente');
    }
}