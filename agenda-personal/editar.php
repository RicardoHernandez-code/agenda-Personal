<?php
include 'functions.php';

$conexion = conexion($bd_config);

$id_evento = $_GET['id'];

if(isset($_SESSION['mensaje'])){
    $mensaje = $_SESSION['mensaje'];
}



$evento = eventoPorId($conexion, $id_evento);
$evento = $evento[0];

$limiteDias = verificarFecha($evento[2]);

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

if(isset($_POST['grabar'])){
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $descripcion = $_POST['descripcion'];
    if(verificarFechaPost($mes, $dia)){
        editarEvento($conexion,$id_evento, $dia, $mes, $descripcion);
        unset($_SESSION['mensaje']);
        header('Location:index.php');
    }else{
        $_SESSION['mensaje'] = 'Cantidad errónea de días para ese mes, por favor vuelva a intentarlo.';
        $_SESSION['confirmar'] = verificarFechaPost($mes, $dia);
    }
}

if(isset($_POST['volver'])){
    header('Location:index.php');
}

include 'views/editar.view.php';?>