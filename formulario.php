<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$fechadeNacimiento = $_POST['fechadeNacimiento'];
	$email = $_POST['email'];
	$conexion = new mysqli("127.0.0.1","root","","escritophp");
	guardar($nombre, $apellido, $telefono, $edad, $fechadeNacimiento, $email, $conexion)
	
	function guardar($nombreG, $apellidoG, $telefonoG, $edadG, $fechadeNacimientoG, $emailG, $conexionG){
		if(validardatosingresados){
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
	
	function validardatosingresados($nombre, $apellido, $telefono, $edad, $fechadeNacimiento, $email){
        if(!confirmarCamposVacios($nombre, $apellido, $telefono, $edad, $fechadeNacimiento, $email)) return false;
        if(!confirmarNumerico($edad)) return false;
		
        return true;
    }
	
	function confirmarCamposVacios($nombreCCV, $apellidoCCV, $telefonoCCV, $edadCCV, $fechadeNacimientoCCV, $emailCCV){
        if($nombreCCV === "" || $apellidoCCV === "" || $telefonoCCV === "" || $edadCCV === "" || $fechadeNacimientoCCV === "" || $emailCCV === ""){
            return false;
        }
        return true;
    }

    function confirmarNumerico($numero){
        if(!is_numeric($numero)){
            return false;
        }
        return true;
    }