<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
  

/* Pie de página */
.footer1{
    background-color: #333333;
    color: #fff;
    padding: 20px;
    text-align: center;
    text-align: justify;
}

.footer2 {
    background-color: #333333;
    color: #fff;
    padding: 20px;
    text-align: center;
 
}
.footer2 {
    background-color: #123456; 
    text-align: justify;/* Cambiar al color de fondo deseado */
}
.footer3 {
    background-color: #ffffff; /* Fondo blanco */
    color: #000000; /* Texto negro */
    padding: 50px;
    text-align: center;
    margin: 50px auto;
    max-width: 600px;
}

.footer3 h1,
.footer3 h2 {
    text-align: left; /* Anula la alineación centrada para h1 y h2 */
}
.footer3 p {
    text-align: justify;
}


/* Estilos adicionales para el pie de página */
.footer-container {
    display: flex;
    justify-content: space-between;
}

.footer-column {
    flex: 1;
    margin-right: 20px;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
}
.map {
    margin: 0 auto; /* Centra el elemento horizontalmente */
    max-width: 1000px; /* Establece el ancho máximo del contenedor */
    width: 1000%; /* Asegura que el contenedor tenga un ancho del 100% */
    overflow: hidden; /* Evita que el contenido se desborde */
}

.map iframe {
    width: 100%; /* Ajusta el ancho del iframe para que se ajuste al contenedor */
     /* Permite que la altura se ajuste automáticamente según el ancho */
}

    </style>
</head>
<body>
        <div class="header-container">
        <div class="header">
            <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">
            <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">

            <div class="navbar">
            <a href="#inicio">INICIO</a>
            <a href="QuienesSomos.blade.php">QUIENES SOMOS &nbsp;<i class="fa-solid fa-house"></i></a>
            <a href="#servicios">SERVICIOS</a>
            <a href="Ubicacion.blade.php">UBICACION</a>
            <a href="#reserva">RESERVA</a>
            <a href="#verificacion">VERIFICACION</a>
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
</footer>

    <footer class="footer1">
    <div class="footer-container">
        <div class="footer-column">
            <h3>UNIDAD</h3>
            <p>Unidad de Emprendimiento</p>
        </div>
        <div class="footer-column">
            <h3>SEDES</h3>
            <p>Latacunga</p>
        </div>
        <div class="footer-column">
            <h3>DEPARTAMENTOS MATRIZ</h3>
            <p>Ciencias de la Computación</p>
            <p>Ciencias de la Tierra y de la Construcción</p>
            <p>Ciencias de la Vida</p>
            <p>Ciencias Económicas Administrativa y de Comercio</p>
            <p>Ciencias Exactas</p>
            <p>Ciencias Humanas y Sociales</p>
            <p>Electricidad y Electrónica</p>
            <p>Energía y Mecanica </p>
            <p>Seguridad y Defensa</p>
            <!-- Add more departments as needed -->
        </div>
        <div class="footer-column">
            <h3>DEPARTAMENTOS LATACUNGA</h3>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
            <p>Ciencias Económicas Administrativa y de Comercio</p>
            <p>Energía y Mecanica</p>
            <p>Seguridad y Defensa</p>
            <p>Ciencias Humanas y Sociales</p>
            <p>Ciencias de la Computación</p>
            <!-- Add more departments as needed -->
        </div>
    </div>
</footer>
<footer class="footer2">
    <div class="footer-bottom2">
        <p>© 2024 ESPE | Sede quito</p>
    </div>
</footer>
</body>
</html>