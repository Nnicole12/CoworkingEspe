<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('CSS/foter.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .header-container {
        width: 100%;
        background-color: #FFFFFF;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .header {
        text-align: center;
        color: green;
    }

    .header img {
        width: 572.09px;
        height: 100px;
        margin: 0px 0px 15px;
    }

    .navbar {
        overflow: hidden;
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .navbar a {
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        border-radius: 25px;
        font-size: 14px;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .call-icon {
        float: right;
    }

    .terms-box {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: auto;
    }

    .terms-box h2 {
        margin-top: 0;
    }

    .terms-box button {
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .terms-box button.accept {
        background-color: green;
        color: #fff;
    }

    .terms-box button.reject {
        background-color: red;
        color: #fff;
    }

    .no-pertenece-espe {
        text-align: center;
        margin-top: 20px;

    }

    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 40%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-left: 5%;
        float: left;
        /* Alinea el contenedor a la izquierda */
    }

    h3 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 30px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="time"],
    input[type="date"],
    select {
        width: calc(100% - 18px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
        /* Alinea el botón a la izquierda */
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    #horas,
    #dias {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="header-container">
        <div class="header">
            <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">
            <div class="navbar">
                <a href="{{ url('/Inicio') }}">INICIO &nbsp;</a>
                <a href="{{ url('/QuienesSomos') }}">QUIENES SOMOS</a>
                <a href="{{ url('/Servicios') }}">SERVICIOS</a>
                <a href="{{ url('/Ubicacion') }}">UBICACION</a>
                <a href="{{ url('/Reservas') }}">RESERVAS</a>
                <a href="#call" class="call-icon"><i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>

    <main>
        <!-- Contenido principal -->
    </main>




    <div class="form-imagen-container">
        <div class="no-pertenece-espe" id="formularioNoPertenecer">
            <h2>No Pertenecer a la comunidad ESPE</h2>



            <form id="formularioNoPertenecer" action="{{ route('formularioExterno.guardar') }}" method="POST"
                onsubmit="return validarFormularioNoPertenecer()">
                @csrf
                <div class="form-container">
                    <h3>Formulario de Registro</h3>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                    <label for="cedula">Cédula:</label>
                    <input type="text" id="cedula" name="cedula" required>
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required>
                    <label for="numPersonas">Número de Personas:</label>
                    <input type="number" id="numPersonas" name="numPersonas" min="1" max="12" required>

                    <label for="tiempoUso">Tiempo de Uso:</label>
                    <select id="tiempoUso" name="tiempoUso" onchange="mostrarTiempoUso()">
                        <option value="ninguno" selected>Ninguno</option>
                        <option value="horas">Horas</option>
                        <option value="dias">Días</option>
                    </select>

                    <!-- Campos para el tiempo de uso en horas -->
                    <div id="horas" style="display: none;">
                        <label for="horaInicio">Hora de Inicio:</label>
                        <input type="time" id="horaInicio" name="horaInicio">
                        <label for="horaFin">Hora de Fin:</label>
                        <input type="time" id="horaFin" name="horaFin">
                    </div>

                    Campos para el tiempo de uso en días
                    <div id="dias" style="display: none;">
                        <label for="diaInicio">Día de Inicio:</label>
                        <input type="date" id="diaInicio" name="diaInicio">
                        <label for="diaFin">Día de Fin:</label>
                        <input type="date" id="diaFin" name="diaFin">
                    </div>

                    <!-- Selección de aparatos externos -->
                    <label>Aparatos Externos:</label>
                    <div>
                        <input type="checkbox" id="proyector" name="proyector">
                        <label for="proyector">Proyector</label>
                    </div>
                    <div>
                        <input type="checkbox" id="pizarraInteligente" name="pizarraInteligente">
                        <label for="pizarraInteligente">Pizarra Inteligente</label>
                    </div>

                    <!-- Botón de enviar formulario -->
                    <button>Enviar</button>
                </div>
            </form>

        </div>

    </div><br><br>



    <footer>
        <div class="footer1">
            <div class="footer-content">
                <div class="contact-info">
                    <h3>UNIDAD</h3>
                    <p>Unidad de Emprendimiento</p>
                    <p>Teléfono: +593 2 123 4567</p>
                    <p>Email: <a href="mailto:info@espe.edu.ec">info@espe.edu.ec</a></p>
                </div>
                <div class="sedes">
                    <h3>SEDES</h3>
                    <p>Sede Latacunga</p>
                </div>
                <div class="matriz">
                    <h3>DEPARTAMENTOS MATRIZ</h3>
                    <p>Ciencias de la Computación</p>
                    <p>Ciencias de la Tierra y de la Construcción </p>
                    <p>Ciencias de la Vida</p>
                    <p>Ciencias Económicas Administrativas y de Comercio</p>
                    <p>Ciencias Exactas </p>
                    <p>Eléctrica y Electrónica</p>
                    <p>Energía y Mecánica</p>
                    <p>Seguridad y Defensa</p>
                </div>
                <div class="depLt">
                    <h3>DEPARTAMENTOS LATACUNGA</h3>
                    <p>Ciencias Exactas</p>
                    <p>Energía y Mecánica</p>
                    <p>Ciencias Económicas Administrativas y de Comercio</p>
                    <p>Eléctrica y Electrónica</p>
                    <p>Seguridad y Defensa</p>
                    <p>Ciencias Humanas y Sociales</p>
                    <p>Ciencias de la Computación</p>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <p>© 2024 ESPE. Sede Latacunga.</p>
        </div>
    </footer>

    <script>
    function mostrarTiempoUso() {
        var tiempoUso = document.getElementById("tiempoUso").value;
        if (tiempoUso === "horas") {
            document.getElementById("horas").style.display = "block";
            document.getElementById("dias").style.display = "none";
        } else if (tiempoUso === "dias") {
            document.getElementById("horas").style.display = "none";
            document.getElementById("dias").style.display = "block";
        } else {
            document.getElementById("horas").style.display = "none";
            document.getElementById("dias").style.display = "none";
        }
    }

    function validarFormulario() {
        // Validación del correo institucional
        var correo = document.getElementById("correo").value;
        if (!correo.endsWith("@espe.edu.ec")) {
            alert("El correo institucional debe ser de la forma 'usuario@espe.edu.ec'");
            return false;
        }

        // Validación de campos requeridos
        var nombres = document.getElementById("nombres").value;
        var apellidos = document.getElementById("apellidos").value;
        var id = document.getElementById("id").value;
        var carrera = document.getElementById("carrera").value;
        var nivel = document.getElementById("nivel").value;
        var numPersonas = document.getElementById("numPersonas").value;
        var tiempoUso = document.getElementById("tiempoUso").value;
        var horaInicio = document.getElementById("horaInicio").value;
        var horaFin = document.getElementById("horaFin").value;



        if (nombres == "" || apellidos == "" || id == "" || carrera == "" || nivel == "" || numPersonas == "" ||
            tiempoUso == "") {
            alert("Todos los campos son obligatorios.");
            return false;
        }

        // Validación de tiempo de uso
        if (horaInicio >= horaFin) {
            alert("La hora de fin debe ser mayor que la hora de inicio.");
            return false;
        }

        return true;
    }
    </script>
</body>

</html>