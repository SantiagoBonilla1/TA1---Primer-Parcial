<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$fechadeNacimiento = $_POST['fechadeNacimiento'];
	$email = $_POST['email'];
	$conexion = mysqli_connect("localhost", "root", "", "escritophp");
	
	public function guardar(){
	$sql = "INSERT INTO persona(nombre,apellido,telefono,edad,fechadeNacimiento,email) VALUES (
            '$nombre',
            '$apellido',
            '$edad',
            '$email'}
			)";
	mysqli_query($conexion, $sql);
	}
	