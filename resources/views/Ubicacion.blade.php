<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('CSS/Ubicacion.css') }}" rel="stylesheet">


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
    background-color: #333333;
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
    background-color: #f5f5f5; 
    color: #333; 
    padding: 20px;
}
    </style>
</head>

<body>
    <div class="header-container">
        <div class="header">
            <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">
            <div class="navbar">
                <a href="#inicio">INICIO</a>
                <a href="#quienes_somos">QUIENES SOMOS</a>
                <a href="#servicios">SERVICIOS</a>
                <a href="#ubicacion">UBICACION</a>
                <a href="#reserva">RESERVA</a>
                <a href="#verificacion">VERIFICACION</a>
                <a href="#call" class="call-icon"><i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div><br><br><br><br>

    <div class="rectangulo">

    </div><br><br><br>
    <div class="container">
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.3215262476521!2d-78.61240942702352!3d-0.9358572239899882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4610f5d33a74d%3A0x408aab614807127a!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE%20Sede%20Latacunga%20(campus%20centro)!5e0!3m2!1ses!2sec!4v1707745243432!5m2!1ses!2sec" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

    

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
            
        </div>
        <div class="footer-column">
            <h3>DEPARTAMENTOS LATACUNGA</h3>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
            <p>Ciencias Exactas</p>
            <p>Energía y Mecánica</p>
        </div>
    </div>
</footer>
<footer class="footer2">
    <div class="footer-bottom2">
        <p>© 2024 ESPE | Sede Latacunga</p>
    </div>
</footer>

</body>

</html>
