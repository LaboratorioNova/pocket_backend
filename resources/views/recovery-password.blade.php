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
		<br>
        <br>
        <br>
        <img class="logo" src="{{env('APP_URL') . 'images/logo-email.png'}}" alt="">
        <br>
		<h1>Recuperación de contraseña</h1>
        <br>		
		<h3>¡Hola, {{$user->name}}!</h3>
		<p>Estás recibiendo este email porque has solicitado cambiar la contraseña. Presiona la siguiente liga para cambiar la contraseña o utiliza el código debajo</p>
		<br>
		<br>
		@if(!is_null($token)) <a href="http://qa-nova-laboratorio.herokuapp.com/password-reset/{{$token}}">Deseo cambiar la contraseña</a>
		@elseif(!is_null($nip))  
			<p><b>NIP de seguidad: </b> {{$nip}} </p>
		@endif
		<br>
		<br>
		<p>Esta liga será útil por solo 60 minutos. Sí no has solicitado el cambio de contraseña, no tienes que hacer nada. Sí no puedes acceder a la liga, consulta la siguiente dirección <br> <b><i>http://qa-nova-laboratorio.herokuapp.com/password-reset/{{$token}}{{$nip}}</i></b></p>
		<br><br>
		<p class="text-left">Saludos</br></br>Atte:</br>Laboratorio de Análisis Clínicos NOVA</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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