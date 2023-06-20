<!DOCTYPE html>
<html lang="es">
<head>
    <title>Aviso de privacidad</title>
    <link rel="shortcut icon" type="image/png" href="{{env('APP_URL') . 'images/app.png'}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="content">
        <br>
        <center>
            <img class="logo" src="{{env('APP_URL') . 'images/logo.png'}}" alt="">
        </center>
        <br>
        <br>
        <h1 style="text-align: center;">Aviso de privacidad</h1>
        <p>Laboratorio de Análisis Clínicos NOVA, S.A. de C.V., con domicilio en Av. Cuauhtémoc No. 609 Sur, Zona Centro, en la ciudad de Durango, Dgo., recabará datos personales de sus clientes, así como ubicaciones de sus prestadores de servicios, siendo responsable del uso que se le dé a los mismos y de su protección.</p>
        <br>
        <br>
        <p>Su información personal será utilizada para proveer los servicios de realización de análisis clínicos que ha solicitado, para tal fin requerimos obtener los siguientes datos personales: Nombre completo, domicilio, teléfono, correo electrónico, género, fecha de nacimiento. Además de estos datos obtendremos datos acerca de:</p>
        <br>
        <p>A) Su estado de salud presente y futuro, y</p>
        <p>B) En algunos procedimientos analíticos, cuando así nos sea solicitado por usted o por su médico, podríamos obtener datos genéticos.</p>
        <br>
        <p>Estos últimos datos están considerados como sensibles según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
        <br>
        <p>Usted tiene derecho a acceder, rectificar y cancelar sus datos personales, así como oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos se pueden poner en contacto con el responsable de los datos personales: QFB Leopoldo Ontiveros Álvarez, en domicilio Av. Cuauhtémoc No. 609 Sur, Zona Centro, en la ciudad de Durango, Dgo., al teléfono (618) 811 72 30, al correo labnova@prodigy.net.mx o visitando nuestra página web www.labnova.com.mx.</p>
        <br>
        <p>Así mismo le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En este sentido su información puede ser compartida con el médico que firma la solicitud de análisis de laboratorio que usted presenta al momento previo a la toma de muestra o con el médico que usted nos indique durante la captura de datos personales. Así mismo hacemos de su conocimiento que el comprobante que entregamos a usted para recoger sus resultados de laboratorio es en sí un documento que autoriza al portador a recibir dichos documentos, si usted lo extravía por favor notifíquelo de inmediato al responsable de los datos personales del Laboratorio. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.</p>
        <br>
        <h2>Contáctenos</h2>
        <p>En caso de preguntas o sugerencias sobre nuestros términos y condiciones no dude en ponerse en contacto en nuestro domicilio: Cuauhtémoc 609 sur, Zona Centro, C.P. 34000, Durango, Dgo. México, por teléfono: +52 1 (618) 811 7230 o vía WhatsApp al: 618 158 8403. </p>
    </div>
    <style>
        body,
        p,
        div {
            margin: 0px;
            padding: 0px;
            color: black;
        }

        img.logo {
            width: 350px;
        }

        .content{
            padding: 5% 15%;
            text-align: justify; 
            font-family: Helvetica, Arial, sans-serif;
            font-size: 24px;
        }

        @media (max-width: 1100px) {
            .content{
                padding: 2% 5%;
            }
        }

        body {
            background: url("{{env('APP_URL') . 'images/bg.jpg'}}");
            background-position: bottom;
            background-size: cover;
        }
    </style>
</body>
</html>
    
    