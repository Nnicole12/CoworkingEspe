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
        .header img {
            width: 572.09px;
            height: 100px;
            margin: 0px 0px 15px;
        }
        body {
            font-family: Arial, sans-serif;
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
    </style>
</head>
<body>
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
</body>
</html>
