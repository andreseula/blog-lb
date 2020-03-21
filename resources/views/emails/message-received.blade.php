<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message</title>
</head>
<body>
	<p><u>Recibiste un Mensaje de: {{$msj['fullname'] }}</u></p>
	<p><strong>Asunto: </strong>{{$msj['subject'] }}</p>
	<p><strong>Contenido: </strong><br>
	{{$msj['content']}}</p>


</body>
</html>