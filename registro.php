<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$Nick = $_POST['username'];
	$Nombre = $_POST['name'];
	$Mail = $_POST['email'];
	$Contraseña = $_POST['password'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseña = md5($password);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$Nombre','$apellidos','$Mail','$Contraseña')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>