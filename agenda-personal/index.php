<?php
include 'functions.php';

$conexion = conexion($bd_config);

    $todo = false;

    if(!isset($_POST['buscar'])){
        $todo = true;
    }else{
        $todo = false;
        $busqueda = busquedaSearchBar($conexion, $_POST['buscar']);
    }

    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

include 'views/index.view.php' ?>