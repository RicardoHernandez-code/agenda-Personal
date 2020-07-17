<?php

include 'config/config.php';


function verificarFecha($mes){
	if($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12 ){
		return 31;
	}

	if($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11 ){
		return 30;
	}

	if($mes == 2){
		return 29;
	}
}

function verificarFechaPost($mes, $dia){
	if($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){
		if($dia > 31){
			return false;
		}else{
			return true;
		}
	}

	if($mes == 2){
		if($dia > 29){
			return false;
		}else{
			return true;
		}
	}

	if($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11 ){
		if($dia > 30){
			return false;
		}else{
			return true;
		}
	}
}


function conexion($bd_config){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;
	}
}


function eventosPorMes($conexion, $mes){
	$mes = $mes + 1;
    $resultado = $conexion->query("SELECT eventos.* FROM eventos WHERE mes = '$mes' ORDER BY dia ASC");
	return $resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function eventoPorId($conexion, $id){
	$resultado = $conexion->query("SELECT eventos.* FROM eventos WHERE id = '$id'");
	return $resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function busquedaSearchBar($conexion, $busqueda){
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM eventos  WHERE descripcion LIKE '%{$busqueda}%'");
	$sentencia->execute();
	return $sentencia->fetchAll();
}


// Funcion para borrar contacto

function borrarEvento($conexion, $id_evento){
	$resultado = $conexion->query("DELETE FROM eventos WHERE id = '$id_evento'");
}


// Funcion para editar contacto

function editarEvento($conexion,$id_evento, $dia, $mes, $descripcion){
	$resultado = $conexion->query("UPDATE eventos SET dia = '$dia', mes = '$mes', descripcion = '$descripcion' WHERE id = '$id_evento' ");
	$resultado->execute();
}

//Funcion para crear evento

function crearEvento($conexion, $dia, $mes, $descripcion){
	$resultado = $conexion->query("INSERT INTO eventos (dia, mes, descripcion) VALUES ('$dia', '$mes', '$descripcion')");
}



?>