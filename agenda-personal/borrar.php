<?php
include 'functions.php';

$conexion = conexion($bd_config);

$id_evento = $_GET['id'];

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

$evento = eventoPorId($conexion, $id_evento);

$evento = $evento[0];

if(isset($_POST['borrar'])){
    borrarEvento($conexion, $id_evento);
    header('Location: index.php');
}

if(isset($_POST['volver'])){
    header('Location: index.php');
}

include 'views/borrar.view.php';?>