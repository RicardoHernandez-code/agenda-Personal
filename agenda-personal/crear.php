<?php

include 'functions.php';

$conexion = conexion($bd_config);

$mes = $_GET['mes'];

$limiteDias = verificarFecha($mes);

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


if(isset($_POST['crear'])){
    crearEvento($conexion, $_POST['dia'], $mes, $_POST['descripcion']);
    header('Location:index.php');
}

if(isset($_POST['volver'])){
    header('Location:index.php');
}


include 'views/crear.view.php';?>