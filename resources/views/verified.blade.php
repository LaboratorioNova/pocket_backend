<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de correo</title>
</head>
<body>
  
    <center>
        <br>
        <br>
        <br>
        <br>
        <img class="logo" src="{{env('APP_URL') . 'images/logo.png'}}" alt="">
        <br>
        <br>
        <!-- <p>NOVA Laboratorio de Análisis Clínicos</p> -->
        <br>
        <br>
        <br>
        <br>
        <p>¡Correo verificado con éxito!</p>
        <br>
        <br>
        <br>
        <br>
    </center>

    <img class="bg" src="{{env('APP_URL') . 'images/bg.jpg'}}" alt="background">

    <style>
        body,
        p,
        div {
            margin: 0px;
            padding: 0px;
            color: black; 
        }

        img.logo{
            width: 350px;
        }

        img.bg {
            z-index: -1;
            display: block;
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100vh;
            bottom: 0px;
            opacity: 0.7;
        }
    </style>
</body>
</html>