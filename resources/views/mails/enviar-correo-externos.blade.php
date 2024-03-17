<h1>Reserva de Sala</h1>

<p>Hola {{ $datos['nombre'] }},</p>

<p>Te confirmamos que tu reserva ha sido procesada exitosamente. A continuación, te proporcionamos los detalles:</p>

<ul>
    <li><strong>Nombre:</strong> {{ $datos['nombre'] }}</li>
    <li><strong>Apellido:</strong> {{ $datos['apellido'] }}</li>
    <li><strong>Cedula:</strong> {{ $datos['cedula'] }}</li>
    <li><strong>Número de Personas:</strong> {{ $datos['numPersonas'] }}</li>
    <li><strong>Telefono:</strong> {{ $datos['telefono'] }}</li>
    @if(!empty($datos['hora_inicio']) && !empty($datos['hora_final']))
    <li><strong>Hora de inicio:</strong> {{ $datos['hora_inicio'] }}</li>
    <li><strong>Hora final:</strong> {{ $datos['hora_final'] }}</li>
    @else
    <li><strong>Hora de inicio:</strong> No especificada</li>
    <li><strong>Hora final:</strong> No especificada</li>
    @endif

    @if(!empty($datos['dia_inicial']) && !empty($datos['dia_final']))
    <li><strong>Día inicial:</strong> {{ $datos['dia_inicial'] }}</li>
    <li><strong>Día final:</strong> {{ $datos['dia_final'] }}</li>
    @else
    <li><strong>Día inicial:</strong> No especificado</li>
    <li><strong>Día final:</strong> No especificado</li>
    @endif
    <li><strong>Proyector:</strong> {{ $datos['proyector'] == 1 ? 'Sí' : 'No' }}</li>
    <li><strong>Pizarra inteligente:</strong> {{ $datos['pizarra_inteligente'] == 1 ? 'Sí' : 'No' }}</li>
</ul>

<p>Gracias por tu reserva.</p>

<p>Saludos,<br>El equipo de reservas</p>