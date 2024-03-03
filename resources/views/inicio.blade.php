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
}
.header {
    text-align: center;
    color: green;
}
.header1 {
    text-align: ;
    color:black;
}
.header img {
    width: 572.09px;
    height: 100px;
    margin: 0px 0px 15px;
}
body {
    font-family: Arial, sans-serif;0
}
.navbar {
    background-color: #FFFFFF;
    overflow: hidden;
    display: flex;
    justify-content: space-around;
    padding: 20px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.navbar a {
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    border-radius: 25px;
    font-size: 17px;
}
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.call-icon {
	float: right;
  }
  



.map {
    margin: 0 auto; 
    max-width: 1000px; 
    width: 1000%; 
    overflow: hidden; 
}

.map iframe {
    width: 100%; 
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
    <br><br>
    <section class="slide">
        <div class="map">
            <iframe width="800" height="600" src="https://www.youtube.com/embed/NKygGa1c30c" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="drt-control control-left" id="lft-control">
            <div class="drt-control control-right" id="rht-control"></div>
            <ul class="slider-controls" id="slider-controls"></ul>
            <div class="tempo-bar" id="barra"></div>
        </div>
    </section>
    
    <footer class="header-container"> 
        <footer class="footer3">
        <h1>Coworking Espe</h1>
        <p>Sede Latacunga</p>
    <div class="footer-bottom2">
    <p style="font-size: 24px;">La Universidad de las Fuerzas Armadas ESPE continúa destacándose como un 
            referente en el ámbito académico al ofrecer un espacio de coworking que va más allá de las convenciones tradicionales.</p>
            <p style="font-size: 24px;">Este innovador espacio se erige como un epicentro de colaboración y desarrollo, donde se fusionan la excelencia académica, la innovación y el espíritu emprendedor en un entorno dinámico y colaborativo.</p>
        </div>
</footer>
    </div>
</div>

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

</body>
</html>
