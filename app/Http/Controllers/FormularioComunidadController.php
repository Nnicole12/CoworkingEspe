<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioComunidad;
use App\Mail\EnviarCorreoComunidad;
use Illuminate\Support\Facades\Mail;

class FormularioComunidadController extends Controller
{
    public function store(Request $request)
    {
        
        // Validar los datos del formulario
        /*$request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'identificador' => 'required',
            'correo' => 'required|email',
            'carrera' => 'required',
            'nivel' => 'required',
            'numPersonas' => 'required|integer|min:1|max:12',
            // Puedes agregar más reglas de validación según tus necesidades
        ]);*/

        // Crear un nuevo objeto FormularioComunidad
        $formulario = new FormularioComunidad;
        $formulario->nombre = $request->nombres;
        $formulario->apellido = $request->apellido;
        $formulario->identificador = $request->identificador;
        $formulario->correo = $request->correo;
        $formulario->carrera = $request->carrera;
        $formulario->nivel = $request->nivel;
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
            'nombre' => $request->nombres,
            'apellido' => $request->apellido,
            'identificador' => $request->identificador,
            'carrera' => $request->carrera,
            'nivel' => $request->nivel,
            'numPersonas' => $request->numPersonas,
            'hora_inicio' => $request->horaInicio,
            'hora_final' => $request->horaFin,
            'dia_inicial' => $request->diaInicio,
            'dia_final' => $request->diaFin,
            'proyector' => $formulario->proyector,
            'pizarra_inteligente' => $formulario->pizarra_inteligente,
        ];

        // Envía el correo con los datos
        Mail::to($request->correo)->send(new EnviarCorreoComunidad($datosCorreo));
        // Redireccionar o devolver una respuesta adecuada
        return redirect('/Reservas')->with('success', 'Formulario enviado correctamente');
    }
}