<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="shortcut icon" href="C:\Users\Rakanasateka\Desktop\Laruleta-master\Laruleta-master\img\4848.png">
    </head>
    <body>
		<div class="contenedor">
				<center><img src="img/loginruleta.png" class="avatar" alt="Avatar Image">
				<h1><font color="white">Bienvenido a Food Roulette</font></h1>
			<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
				<div class="contenedor-inputs">
				
						<!--USERNAME INPUT -->
							<label for="username">Nuevo Usuario</label>
							<input type="text" name="usuario" placeholder="Ingrese Usuario">
						<!--NEW NAME INPUT -->
							<label for="name">Nombre y Apellido</label>
							<input type="text" name="nombre" placeholder="Ingrese Nombre y Apellido">
						<!--NEW MAIL INPUT -->
							<label for="email">Ingrese su email</label>
							<input type="text" name="correo" placeholder="Ingrese email">
						<!--NEW PASSWORD INPUT -->
							<label for="newpassword">Nueva Contraseña</label>
							<input type="text" name="contraseña" placeholder="Ingrese Contraseña">
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
		</div>

				<center><input type="submit" class="btn" name="registrarse" value="Registrarse">
				<a href="/pag2.html">Volver al Login</a>
			</form>
		
		</div>
	<script src="formulario.js"></script>
</body>
</html>
<?php
	if(isset($_POST['registrarse'])){
		$usuario=$_POST["usuario"];
		$nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];

		$insertarDatos = "INSERT INTO datos VALUES('$usuario',
													'$nombre',
													'$correo',
													'$contraseña')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>