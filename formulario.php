<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$fechadeNacimiento = $_POST['fechadeNacimiento'];
	$email = $_POST['email'];
	$conexion = mysqli_connect("localhost", "root", "", "escritophp");
	guardar($nombre, $apellido, $telefono, $edad, $fechadeNacimiento, $email, $conexion)
	
	function guardar($nombreG, $apellidoG, $telefonoG, $edadG, $fechadeNacimientoG, $emailG, $conexionG){
		if($nombre !== "" && $apelllido !== "" && $telefono !== "" && $edad !== "" && $fechadeNacimiento !== "" && $email !== "" && edad > 0){
			$sql = "INSERT INTO persona(nombre,apellido,telefono,edad,fechadeNacimiento,email) VALUES (
            '$nombreG',
            '$apellidoG',
            '$telefonoG',
            '$edadG',
            '$fechadeNacimientoG',
            '$emailG'}
			)";
			echo("Persona Agregada correctamente")
		}else{
			header("HTTP/1.1 500 Internal server error");
			echo("Hubo un problema al procesar la solicitud")
		}
	mysqli_query($conexion, $sql);
	}