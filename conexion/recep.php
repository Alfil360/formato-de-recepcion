<?php
include "conexion.php"

$pro = $_POST['Proveedor'];
$nit = $_POST['Nit'];
$cond = $_POST['Conductor'];
$ced = $_POST['Cedula'];
$pla = $_POST['Placa'];
$lote = $_POST['Lote'];
$proceden = $_POST['Procedencia'];

//falta crear la sentencia para ingresar datos




$resultado = $conexion->query($crear);


if($resultado){
    header("location:bascula.php");
}


else{
    header("location:Error.php");
}


?>