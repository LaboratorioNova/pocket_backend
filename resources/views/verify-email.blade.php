
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperación de contraseña</title>
</head>

<body>
	<div class="container">
		<br><br><br>
        <img class="logo" src="{{env('APP_URL') . 'images/logo-email.png'}}" alt="">
        <br>
		<h1>Verificación de correo</h1>
        <br>
		<h3>¡Hola, {{$user->name}}!</h3>
		<p>Presiona la liga de abajo para verificar tu dirección de correo electrónico.</p>
		<br>
		<a href="{{$url}}">Confirmar dirección de correo</a>
		<br>
		<p>Si no creó una cuenta, no es necesario realizar ninguna otra acción.</p>
		<br><br>
        <p>Si tiene problemas para hacer clic en la liga "Confirmar dirección de correo", copie y pegue la URL a continuación en su navegador web:<br><a href="{{$url}}">{{$url}}</a></p>
		<br><br>
		<p class="text-left">Saludos</br></br>Atte:</br>Laboratorio de Análisis Clínicos NOVA</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
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

        .container {
			background: url("{{env('APP_URL') . 'images/bg.jpg'}}");
			background-position: bottom;
			background-size: cover;
			text-align: center;
			padding: 16px;
		}
	</style>
</body>

</html>