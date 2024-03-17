<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="{{ asset('CSS/Ubicacion.css') }}" rel="stylesheet">
    <link href="{{ asset('CSS/foter.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
         body {
            font-family: Arial, sans-serif;
        }

        .header-container {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: #FFFFFF;
            z-index: 1000;
            /* Asegura que el contenedor esté por encima de otros elementos */
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
    

    <div class="card">
      <img class="card__image" src="Imagenes/Espe-latacunga-centro.jpg" alt="Descripción de la imagen">
      <div class="card__content">
        <p class="card__title">VISITANOS</p>
        <p class="card__description">397P+JXC, Quijano y Ordoñez, y, Latacunga 050102</p>
        <p class="card__description">Telf: (03) 281-0206 </p>
        <p class="card__title">HORARIOS</p>
        <p class="card__description">Lunes    7 a.m - 10 p.m</p>
        <p class="card__description">Martes    7 a.m - 10 p.m</p>
        <p class="card__description">Miércoles    7 a.m - 10 p.m</p>
        <p class="card__description">Jueves    7 a.m - 10 p.m</p>
        <p class="card__description">Viernes    7 a.m - 10 p.m</p>
        <p class="card__description">Sábado    7 a.m - 10 p.m</p>
        <p class="card__description">Domingo    Cerrado</p>
        <a href="https://espe-el.espe.edu.ec/">https://espe-el.espe.edu.ec/</a></p>
      </div>
    </div><br><br><br>

    <div class="containermapa">
        <!-- Reemplazamos el emoji 📍 con el icono de Font Awesome -->
        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
        <span class="text">Mapa</span>
    </div><br><br>

    <main>   
    <section class="mapa">
      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2860302505183!2d-78.61519442602805!3d-0.9359229353414771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4610f5d33a74d%3A0x408aab614807127a!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE%20Sede%20Latacunga%20(campus%20centro)!5e0!3m2!1ses!2sec!4v1710020792930!5m2!1ses!2sec" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main><br><br><br>

   

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
                    <p> Ciencias Exactas </p>
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
</body>

</html>
