<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('CSS/QuienesSomos.css') }}" rel="stylesheet">
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
    </div><br><br><br><br>
    <div class="box"><br>
        <div class="title">MISIÓN</div>
        <div class="content"></div>
    </div><br><br>
    <div class="box"><br>
        <div class="title">VISIÓN</div>
        <div class="content"></div>
    </div><br>
    BENEFICIOS
    <div class="wrapper">
        <div class="content-container">
            <div class="text-container">

                <h1>FOMENTO DE LA INNOVACIÓN Y LA COLABORACIÓN</h1><br><br>
                <p>El coworking no solo proporciona un espacio físico para trabajar, sino que también fomenta la
                    innovación
                    y la colaboración entre profesionales de diferentes industrias y disciplinas. Al reunir a personas
                    con
                    diversos antecedentes y experiencias bajo un mismo techo, el coworking crea un ambiente propicio
                    para el
                    intercambio de ideas y la generación de nuevas soluciones.</p>
            </div>
            <div class="image-container">
                <img src="IMAGENES/Cespacio2.jpg" alt="Descripción de la imagen">
            </div>
        </div>

    </div>

    <div class="wrapper">
        <div class="content-container-green">
            <div class="text-container-green">
                <h1>IMPACTO COWORKING</h1><br><br>
                <p>
                    Un beneficio significativo de los espacios de coworking es la oportunidad de networking y
                    colaboración.

                    En estos entornos, puedes interactuar con profesionales de diversos campos y establecer conexiones
                    valiosas. Esto puede llevar a nuevas oportunidades de negocio, colaboraciones, intercambio de
                    conocimientos y apoyo mutuo entre emprendedores y freelancers.

                </p>
            </div>
            <div class="image-container-green">
                <img src="IMAGENES/Coworking.jpg" alt="Descripción de la imagen">
            </div>
        </div>

    </div>

   

</body>

<body>

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
