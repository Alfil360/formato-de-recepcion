<?php
include "conexion.php"

$hume = $_POST['humedad'];
$impur = $_POST['impureza'];
$part = $_POST['partido'];
$yes = $_POST['yesado'];
$rojo = $_POST['rojo'];
$olor = $_POST['olor'];
$hongo = $_POST['hongo'];
$calor = $_POST['calor'];
$inmad = $_POST['inmaduro'];


//falta crear la sentencia para ingresar datos




$resultado = $conexion->query($crear);


if($resultado){
    header("location:secado.php");
}


else{
    header("location:Error.php");
}


?>