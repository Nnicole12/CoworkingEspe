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
        .footer1 {
    background-color: #123456;
    color: #fff;
    padding: 20px;
}
.footer2 {
    background-color: #333333; /* Change this to your desired color */
    color: #fff;
    padding: 20px;
}

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
.footer-bottom1 {
    
    background-color: #f5f5f5; /* Este es un color de fondo más claro */
    color: #333; /* Asegúrate de cambiar también el color del texto para que sea legible */
    padding: 20px;
}




    </style>
</head>
<body>
        <div class="header-container">
        <div class="header">
            <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">
            <div class="navbar">
            <a href="#inicio">INICIO</a>
            <a href="QuienesSomos.blade.php">QUIENES SOMOS &nbsp;<i class="fa-solid fa-house"></i></a>
            <a href="#servicios">SERVICIOS</a>
            <a href="#ubicacion">UBICACION</a>
            <a href="#reserva">RESERVA</a>
            <a href="#verificacion">VERIFICACION</a>
            <a href="#call" class="call-icon"><i class="fas fa-phone"></i></a>
        </div>
    </div>
    <br><br>
    <section class="slide">
        <div class="slider-container">
           
            <img src="imagen/imagen1.jpg" >
        </div>
        <div class="drt-control control-left" id="lft-control">
            <div class="drt-control control-right" id="rht-control">></div>
            <ul class="slider-controls" id="slider-controls"></ul>
            <div class="tempo-bar" id="barra"></div>
        </div>
    </section>
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
            <!-- Add more departments as needed -->
        </div>
        <div class="footer-column">
            <h3>DEPARTAMENTOS LATACUNGA</h3>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
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
